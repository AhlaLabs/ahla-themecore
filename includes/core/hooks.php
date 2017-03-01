<?php
/**
 * Hooks (attch action & filter callbacks to WP hooks)
 *
 * @package MyPrefix
 */

if ( !defined( 'ABSPATH' ) ) exit;

//				WP 				           //			Custom             //

add_action( 'after_setup_theme'	, 'myprefix_loaded' 		    , 0  );
add_action( 'after_setup_theme'	, 'myprefix_setup_theme'    , 10 );
add_action( 'widgets_init'		  , 'myprefix_widgets_init'   , 10 );
add_action( 'init'				      , 'myprefix_register_assets', 99 );
add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_assets' , 10 );
