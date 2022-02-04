<?php
/*
Plugin Name:    Stackspin Plugin
Plugin URI:     https://github.com/level73/stackspin-plugin
Description:    Stackspin plugin for wordpress - to help users understand how the managed instance works
Version:        1.0
Author:         Level73
Author URI:     https://level73.it
License:        MIT
*/

list($pluginBaseDir, $pluginFile) = explode('/', plugin_basename(__FILE__));

define( "STACKSPIN_PLUGIN_PATH", plugin_dir_path( __FILE__ ) );
define( "STACKSPIN_PLUGIN_URL",  plugin_dir_url( __FILE__ ) );
define( "STACKSPIN_DIR_NAME", $pluginBaseDir);


require_once (STACKSPIN_PLUGIN_PATH . 'stackspin-plugin.class.php');

$WP_Stackspin = new WP_Stackspin();


