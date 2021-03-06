<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5959d901665e1bd1da7f3f239c8a2201
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stevenmaguire\\OAuth2\\Client\\' => 28,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
            'Ramsey\\Uuid\\' => 12,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'B' => 
        array (
            'Bolt\\Extension\\cdowdy\\html5video\\' => 33,
            'Bolt\\Extension\\Bolt\\EmailSpooler\\' => 33,
            'Bolt\\Extension\\Bolt\\BoltForms\\' => 30,
            'Bolt\\Extension\\BoltAuth\\Auth\\' => 29,
            'Bolt\\Composer\\EventListener\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stevenmaguire\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/boltauth/auth/lib/League/OAuth2/Client',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/boltauth/auth/lib/League/OAuth2/Client',
        ),
        'Bolt\\Extension\\cdowdy\\html5video\\' => 
        array (
            0 => __DIR__ . '/..' . '/cdowdy/html5video/src',
        ),
        'Bolt\\Extension\\Bolt\\EmailSpooler\\' => 
        array (
            0 => __DIR__ . '/..' . '/bolt/email-spooler/src',
        ),
        'Bolt\\Extension\\Bolt\\BoltForms\\' => 
        array (
            0 => __DIR__ . '/..' . '/bolt/boltforms/src',
        ),
        'Bolt\\Extension\\BoltAuth\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/boltauth/auth/src',
        ),
        'Bolt\\Composer\\EventListener\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../vendor/bolt/bolt/src/Composer/EventListener',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pagerfanta\\' => 
            array (
                0 => __DIR__ . '/..' . '/pagerfanta/pagerfanta/src',
            ),
        ),
    );

    public static $classMap = array (
        'Example\\EventChoice' => __DIR__ . '/..' . '/bolt/boltforms/docs/example/Choice/EventChoice.php',
        'Example\\StaticChoice' => __DIR__ . '/..' . '/bolt/boltforms/docs/example/Choice/StaticChoice.php',
        'Example\\TraversableChoice' => __DIR__ . '/..' . '/bolt/boltforms/docs/example/Choice/TraversableChoice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5959d901665e1bd1da7f3f239c8a2201::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5959d901665e1bd1da7f3f239c8a2201::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5959d901665e1bd1da7f3f239c8a2201::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5959d901665e1bd1da7f3f239c8a2201::$classMap;

        }, null, ClassLoader::class);
    }
}
