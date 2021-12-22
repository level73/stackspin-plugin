<?php
/*
Plugin Name:    Stackspin Plugin
Plugin URI:     https://github.com/level73/stackspin-plugin
Description:    Stackspin plugin for wordpress - to help users understand how the managed instance works
Version:        1.0
Author:         Level73
Author URI:     http://level73.it
License:        MIT
*/


define( "STACKSPIN_PLUGIN_PATH", plugin_dir_path( __FILE__ ) );
define( "STACKSPIN_PLUGIN_URL",  plugin_dir_url( __FILE__ ) );

require_once (STACKSPIN_PLUGIN_PATH . 'stackspin-plugin.class.php');

$WP_Stackspin = new WP_Stackspin();

add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 4 );
function disable_plugin_deactivation( $actions, $plugin_file, $plugin_data, $context ) {

    if ( array_key_exists( 'deactivate', $actions ) && in_array( $plugin_file, array(
            'stackspin-plugin/stackspin-plugin.php',
            // More plugin we want to "block" from deactivation can be added here

        )))
        unset( $actions['deactivate'] );
    return $actions;
}