<?php

namespace Bolt\Extension\cdowdy\html5video;

use Bolt\Extension\cdowdy\html5video\Handler\CDNHandler;
use Bolt\Extension\cdowdy\html5video\Handler\HTML5VideoHandler;
use Bolt\Extension\cdowdy\html5video\Provider\HTML5FieldProvider;
use Bolt\Extension\SimpleExtension;

/**
 * Html5Video extension class.
 *
 * @author Cory Dowdy <cory@corydowdy.com>
 */
class Html5VideoExtension extends SimpleExtension {


	/**
	 * {@inheritdoc}
	 */
	protected function registerTwigPaths()
	{
		return [ 'templates' ];
	}


	/**
	 * {@inheritdoc}
	 */
	protected function registerTwigFunctions()
	{
		$options = [ 'is_safe' => [ 'html' ], 'safe' => true ];
		$this->getConfig();

		return [
			'html5video' => [ 'html5video', $options ],
		];
	}

	public function getServiceProviders()
	{
		return [
			$this,
			new HTML5FieldProvider()
		];
	}


	/**
	 * The callback function when {{ html5video() }} is used in a template.
	 *
	 * @param       $file
	 * @param       $name
	 * @param array $options
	 *
	 * @return string
	 */
	public function html5video( $file, $name = 'default', array $options = array() )
	{

		// get the config file name if using one. otherwise its 'default'
		$configName = $this->getConfigName( $name );

		// check for config settings
		$defaultOptions = $this->getOptions( $configName );
		$defaultConfig  = $this->getDefaultConfig();

		/*
		 * Merge the options set in either 'default' or named config with the options passed in through the twig template
		 */
		$mergedOptions = array_merge( $defaultOptions, $options );
		$attributes    = $this->checkConfig( $mergedOptions, 'attributes', $defaultConfig );
		$poster        = $mergedOptions['video_poster'];
		$isCDN         = $mergedOptions['use_cdn'];
		$preload       = $mergedOptions['preload'];
		$widthHeight   = $this->checkIndex( $mergedOptions, 'width_height', null );
		$mediaFragment = $mergedOptions['media_fragment'];

		$videoID = $mergedOptions['video_id'];
		// get tracks if present
		$tracks = $mergedOptions['tracks'];
		// class passed through the twig template
		$templateClass = $this->checkIndex( $options, 'class', null );
		// classes in the config
		$classes = $this->checkIndex( $defaultOptions, 'class', null );

		if ( $templateClass && $classes ) {
			$htmlClass = array_merge( $classes, $templateClass );
		} elseif ( $templateClass ) {
			$htmlClass = $templateClass;
		} else {
			$htmlClass = $classes;
		}

		$videoSources = $this->createVideoSrcArray( $file, $isCDN, $configName );


		$context = [
			'videoSources' => $videoSources,
			'poster'       => $poster,
			'preload'      => $preload,
			'widthHeight'  => $widthHeight,
			'attributes'   => $attributes,
			'class'        => $htmlClass,
			'video_id'     => $videoID,
			'is_cdn'       => $isCDN,
			'tracks'       => $tracks,
			'fragment'     => $mediaFragment
		];

		return $this->renderTemplate( 'video.twig', $context );
	}


	/**
	 * @param $configOption
	 * @param $configType
	 * @param $defaultConfig
	 *
	 * @return mixed
	 */
	protected function checkConfig( $configOption, $configType, $defaultConfig )
	{
		return ( isset( $configOption[ $configType ] ) ? $configOption[ $configType ] : $defaultConfig['default'][ $configType ] );
	}

	/**
	 * @param $option
	 * @param $optionType
	 * @param $fallback
	 *
	 * @return mixed
	 */
	protected function checkIndex( $option, $optionType, $fallback )
	{
		return ( isset( $option[ $optionType ] ) ? $option[ $optionType ] : $fallback );
	}


	/**
	 * @param $name
	 *
	 * @return string
	 *
	 * get the config name. If no name is passed in the twig function then use
	 * the default settings in our config file under defaults
	 */
	function getConfigName( $name )
	{

		if ( empty( $name ) ) {

			$configName = 'default';

		} else {

			$configName = $name;

		}

		return $configName;
	}


	/**
	 * @param $config
	 * @param $type
	 *
	 * @return mixed
	 *
	 *  get the HTML Class or ID set in the config and pass this to the
	 *  getOptions method :)
	 */
	protected function getClassID( $config, $type )
	{
		$cfg        = $this->getConfig();
		$configName = $this->getConfigName( $config );


		return isset( $cfg[ $configName ][ $type ] ) ? $cfg[ $configName ][ $type ] : null;

	}


	/**
	 * @param $config
	 *
	 * @return array
	 *
	 * gather all the config options and config option methods
	 * create one array that is then passed into the  twig callback function for HTML5 video
	 */
	function getOptions( $config )
	{
		$cfg           = $this->getConfig();
		$configName    = $this->getConfigName( $config );
		$defaultConfig = $this->getDefaultConfig();

		$cdn = $this->checkConfig( $cfg[ $configName ], 'use_cdn', $defaultConfig );

		$attributes  = $this->checkConfig( $cfg[ $configName ], 'attributes', $defaultConfig );
		$preload     = $this->checkConfig( $cfg[ $configName ], 'preload', $defaultConfig );
		$widthHeight = $this->checkIndex( $cfg[ $configName ], 'width_height', null );


		$poster        = $this->checkIndex( $cfg[ $configName ], 'video_poster', null );
		$mediaFragment = $this->mediaFragment( $configName );
		$tracks        = $this->vidTracks( $configName );

		$class   = $this->getClassID( $configName, 'class' );
		$videoID = $this->getClassID( $configName, 'video_id' );

		$defaults = [
			'use_cdn'        => $cdn,
			'video_id'       => $videoID,
			'class'          => $class,
			'attributes'     => $attributes,
			'preload'        => $preload,
			'width_height'   => $widthHeight,
			'video_poster'   => $poster,
			'media_fragment' => $mediaFragment,
			'tracks'         => $tracks
		];

		return $defaults;
	}


	/**
	 * @param       $config
	 * @param array $options
	 * @param       $option
	 *
	 * @return array|mixed
	 */
	protected function combineOptions( $config, $options = array(), $option )
	{
		$configName     = $this->getConfigName( $config );
		$defaultOptions = $this->getOptions( $configName );

		if ( isset( $options[ $option ] ) ) {
			$combined = array_merge( $defaultOptions[ $option ], $options[ $option ] );
		} else {
			$combined = $defaultOptions[ $option ];
		}

		return $combined;
	}


	/**
	 * Our custom field gives us a json encoded array. Here we'll decode that and set the bool for associative
	 * array to true.
	 * Then check to see if the filename is in fact an array. If it's not it came in as a string from a template
	 * or a contentType editor.
	 *
	 * @param $filename
	 *
	 * @return array
	 */
	protected function createVideoSrcArray( $filename, $useCDN, $config )
	{
		$app               = $this->getContainer();
		$configName        = $this->getConfigName( $config );
		$cdnHandler        = new CDNHandler( $this->getConfig(), $configName, $app );
		$html5VideoHandler = new HTML5VideoHandler( $this->getConfig(), $configName, $app );
		$normalizeFiles    = $html5VideoHandler->endcodeData( $filename );

		$videoFile = [];

		if ( $useCDN ) {
//			$actualURL = $cdnHandler->checkForActualURL($filename);

			if ( is_array( $filename ) ) {
				$videoFile += $cdnHandler->cdnFile( $normalizeFiles );

				return $videoFile;
			}

			return $cdnHandler->cdnFile( $filename );

		}

		$videoFile = $html5VideoHandler->videoSources( $filename );


		return $videoFile;
	}


	/**
	 * @param $cfg
	 *
	 * @return mixed
	 */
	protected function vidTracks( $cfg )
	{
		$config     = $this->getConfig();
		$configName = $this->getConfigName( $cfg );

//        $trackConfig = $config[ $configName ]['tracks'];
		$trackConfig = $this->checkIndex( $config[ $configName ], 'tracks', null );

		return $trackConfig;
	}

	/**
	 * @param $cfg
	 *
	 * @return mixed
	 */
	protected function mediaFragment( $cfg )
	{
		$config     = $this->getConfig();
		$configName = $this->getConfigName( $cfg );

		$mediaFragment = isset( $config[ $configName ]['media_fragment'] ) ? $config[ $configName ]['media_fragment'] : null;

		return $mediaFragment;
	}


	/**
	 * @return array
	 */
	protected function getDefaultConfig()
	{
		return [
			'default' => [
				'use_cdn'    => false,
				'attributes' => [ 'controls' ],
				'preload'    => 'metadata',
			]
		];
	}


}