<?php
/**
 * Define some genral data
 *
 * @package MyPrefix
 */

if ( !defined( 'ABSPATH' ) ) exit;

define( 'MYPREFIX_VER' , '1.0.0' );
define( 'MYPREFIX_DIR' , get_template_directory() );
define( 'MYPREFIX_URL' , get_template_directory_uri() );

// load theme localization now before load files
load_theme_textdomain( 'myprefix' , MYPREFIX_DIR.'/languages' );
