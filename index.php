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

// remove the blackbox display if not administrator role
add_action('plugins_loaded','blackbox_user_filter');
function blackbox_user_filter() {
	global $current_user; $current_user = wp_get_current_user();
	if (in_array('administrator', $current_user->roles)) {return;}
	remove_action('admin_footer', array('BlackBox_Hook', 'footer'));
	remove_action('wp_footer', array('BlackBox_Hook', 'footer'));
}
