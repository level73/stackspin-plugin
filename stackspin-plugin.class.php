<?php

class WP_Stackspin
{
    // More plugin we want to "block" from deactivation can be added here
    protected $block_deactivate = array(
            'stackspin-plugin/stackspin-plugin.php',
            'daggerhart-openid-connect-generic/openid-connect-generic.php',
    );

    public function __construct()
    {
        register_activation_hook(plugin_dir_path(__FILE__) . 'stackspin-plugin.php', array($this, 'activate'));
        add_filter( 'plugin_action_links', array($this, 'disable_plugin_deactivation'), 10, 4 );
        add_action('admin_menu', array($this, 'stackspin_admin_page'));
    }

    public function activate()
    {

    }

    public function disable_plugin_deactivation( $actions, $plugin_file, $plugin_data, $context )
    {
        if ( array_key_exists( 'deactivate', $actions ) && in_array( $plugin_file, $this->block_deactivate))
            unset( $actions['deactivate'] );
        return $actions;
    }

    public function stackspin_admin_page() {
        add_menu_page(
            __( 'Stackspin', 'stackspin_plugin' ),
            'Stackspin',
            'manage_options',
            'stackspin-plugin/stackspin-plugin-admin.php',
            '',
            plugins_url( 'stackspin-plugin/assets/images/logo.png' ),
            98
        );
    }
}