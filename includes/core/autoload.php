<?php
/**
 * Core Loader
 *
 * @package MyPrefix
 */

if ( !defined( 'ABSPATH' ) ) exit;

function _myprefix_core_loader()
{
// This file path
$fpath = realpath( dirname( __FILE__ ) );

require_once $fpath . '/define.php';

}
// Load files
_myprefix_core_loader();
