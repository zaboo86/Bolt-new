<?php

namespace Bolt\Session\Bridge\Silex2;

use Bolt\Session\Generator\NativeGenerator;
use Bolt\Session\Handler\Factory\MemcachedFactory;
use Bolt\Session\Handler\Factory\PredisFactory;
use Bolt\Session\Handler\Factory\RedisFactory;
use Bolt\Session\Handler\FileHandler;
use Bolt\Session\Handler\FilesystemHandler;
use Bolt\Session\Handler\MemcachedHandler;
use Bolt\Session\Handler\RedisHandler;
use Bolt\Session\IniBag;
use Bolt\Session\OptionsBag;
use Bolt\Session\Serializer\NativeSerializer;
use Bolt\Session\SessionListener;
use Bolt\Session\SessionStorage;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Api\EventListenerProviderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;

/**
 * Because screw PHP core.
 *
 * @author Carson Full <carsonfull@gmail.com>
 */
class SessionServiceProvider implements ServiceProviderInterface, EventListenerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $app)
    {
        $app['session'] = function ($app) {
            return new Session(
                $app['session.storage'],
                $app['session.bag.attribute'],
                $app['session.bag.flash']
            );
        };

        $app['session.storage'] = function ($app) {
            return new SessionStorage(
                $app['session.options_bag'],
                $app['session.handler'],
                $app['session.generator'],
                $app['session.serializer']
            );
        };

        $app['session.handler'] = function ($app) {
            $options = $app['session.options_bag'];

            return $app['session.handler_factory']($options['save_handler'], $options);
        };

        $app['session.listener'] = function ($app) {
            return new SessionListener($app['session'], $app['session.options_bag']);
        };

        $this->registerOptions($app);

        $this->registerHandlers($app);

        $app['session.generator'] = function ($app) {
            return new NativeGenerator($app['session.generator.bytes_length']);
        };
        $app['session.generator.bytes_length'] = function ($app) {
            $options = $app['session.options_bag'];

            return $options->getInt('sid_length', 32);
        };

        $app['session.serializer'] = function () {
            return new NativeSerializer();
        };

        $app['session.bag.attribute'] = $app->factory(function () {
            return new AttributeBag();
        });

        $app['session.bag.flash'] = $app->factory(function () {
            return new FlashBag();
        });

        $app['session.bag.metadata'] = $app->factory(function () {
            return new MetadataBag();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function subscribe(Container $app, EventDispatcherInterface $dispatcher)
    {
        $dispatcher->addSubscriber($app['session.listener']);
    }

    protected function registerOptions(Container $app)
    {
        $app['session.options'] = [];
        $app['session.options.import_from_ini'] = true;

        $app['session.options_bag'] = function () use ($app) {
            /*
             * This does two things.
             * 1) Merges options together. Precedence is as follows:
             *    - Options from session.options
             *    - Options from ini (if enabled with "session.options.import_from_ini")
             *    - Options hardcoded below
             * 2) Converts options to an OptionsBag instance
             *
             * These defaults are limited to those that are useful and secure.
             */
            $defaults = [
                'save_handler'    => 'files',
                'save_path'       => '/tmp',
                'name'            => 'PHPSESSID',
                'lazy_write'      => true,
                'gc_probability'  => 1,
                'gc_divisor'      => 1000,
                'gc_maxlifetime'  => 1440,
                'cookie_lifetime' => 0,
                'cookie_path'     => '/',
                'cookie_domain'   => null,
                'cookie_secure'   => false,
                'cookie_httponly' => false,
                'sid_length'      => 32,

                'restrict_realm' => false,
            ];

            $options = new OptionsBag($defaults);

            if ($app['session.options.import_from_ini']) {
                $ini = new IniBag('session');
                foreach ($options as $key => $value) {
                    if (!$ini->has($key)) {
                        continue;
                    }

                    if (is_int($value)) {
                        $value = $ini->getInt($key);
                    } elseif (is_bool($value)) {
                        $value = $ini->getBoolean($key);
                    } else {
                        $value = $ini->get($key);
                    }

                    $options[$key] = $value;
                }
            }

            $overrides = $app['session.options'];

            // Don't let save_path for different save_handler bleed in.
            if (isset($overrides['save_handler']) && $overrides['save_handler'] !== $options['save_handler']) {
                $options->remove('save_path');
            }

            $options->add($overrides);

            return $options;
        };
    }

    protected function registerHandlers(Container $app)
    {
        $app['session.handler_factory'] = $app->protect(
            function ($handler, OptionsBag $options) use ($app) {
                $key = 'session.handler_factory.' . $handler;
                if (isset($app[$key])) {
                    return $app[$key]($options);
                }
                throw new \RuntimeException("Unsupported handler type '$handler' specified");
            }
        );

        $this->registerFilesHandler($app);
        $this->registerFilesystemHandler($app);
        $this->registerMemcacheHandler($app);
        $this->registerRedisHandler($app);
    }

    protected function registerFilesHandler(Container $app)
    {
        $app['session.handler_factory.files'] = $app->protect(
            function ($options) use ($app) {
                return new FileHandler($options['save_path'], $app['logger']);
            }
        );
    }

    protected function registerFilesystemHandler(Container $app)
    {
        $app['session.handler_factory.filesystem'] = $app->protect(
            function ($options) use ($app) {
                $dir = $app['filesystem']->getDir($options['save_path']);

                return new FilesystemHandler($dir);
            }
        );
    }

    protected function registerMemcacheHandler(Container $app)
    {
        $app['session.handler_factory.backing_memcached'] = $app->protect(
            function (OptionsBag $options) {
                return (new MemcachedFactory())->create($options);
            }
        );

        $app['session.handler_factory.memcached'] = $app->protect(
            function (OptionsBag $options) use ($app) {
                $memcache = $app['session.handler_factory.backing_memcached']($options);

                $handlerOptions = new OptionsBag($options->get('options', []));

                $memcacheOptions = [];
                if (isset($handlerOptions['expiretime'])) {
                    $memcacheOptions['expiretime'] = $handlerOptions['expiretime'];
                }
                if (isset($handlerOptions['prefix'])) {
                    $memcacheOptions['prefix'] = $handlerOptions['prefix'];
                }

                return new MemcachedHandler($memcache, $memcacheOptions);
            }
        );
    }

    protected function registerRedisHandler(Container $app)
    {
        $app['session.handler_factory.backing_redis'] = $app->protect(
            function (OptionsBag $options) use ($app) {
                return (new RedisFactory())->create($options);
            }
        );

        $app['session.handler_factory.redis'] = $app->protect(
            function (OptionsBag $options) use ($app) {
                $redis = $app['session.handler_factory.backing_redis']($options);

                return new RedisHandler($redis, $options['gc_maxlifetime']);
            }
        );

        $app['session.handler_factory.backing_predis'] = $app->protect(
            function (OptionsBag $options) use ($app) {
                return (new PredisFactory())->create($options);
            }
        );

        $app['session.handler_factory.predis'] = $app->protect(
            function (OptionsBag $options) use ($app) {
                $redis = $app['session.handler_factory.backing_predis']($options);

                return new RedisHandler($redis, $options['gc_maxlifetime']);
            }
        );
    }
}
