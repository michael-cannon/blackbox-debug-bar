<?php
/*
Plugin Name: BlackBox
Plugin URI: http://ditio.net/2011/01/29/wordpress-debug-bar-plugin-blackbox/
Description: BlackBox is designed for WordPress plugin and theme developers, it uses unobstrusive box that contatins useful informatiom (executed queries, global variables, notices, warnings and profiler). BlackBox should be used in a development environment only
Author: Grzegorz Winiarski
Version: 0.1.3
Author URI: http://ditio.net/
*/

if (!defined('SAVEQUERIES')) {
	define('SAVEQUERIES', 1);
}

define('BLACKBOX_DIR', dirname(__FILE__));

require_once BLACKBOX_DIR.'/application/BlackBox.php';
require_once BLACKBOX_DIR.'/application/BlackBox/Profiler.php';
require_once BLACKBOX_DIR.'/application/BlackBox/Hook.php';
require_once BLACKBOX_DIR.'/application/BlackBox/Exception.php';
require_once BLACKBOX_DIR.'/application/BlackBox/WPConstants.php';
require_once BLACKBOX_DIR.'/application/BlackBox/WPGlobals.php';

BlackBox::init();
