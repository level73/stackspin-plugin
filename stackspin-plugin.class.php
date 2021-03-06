<?php

class WP_Stackspin
{
    // More plugins we want to "block" from deactivation can be added here
    protected $block_deactivate = array(
            STACKSPIN_DIR_NAME . '/stackspin-plugin.php',
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
        // If anything needs to happen on Activation, code can be added here
    }

    // Disable plugin deactivation for select plugins
    public function disable_plugin_deactivation( $actions, $plugin_file, $plugin_data, $context )
    {
        if ( array_key_exists( 'deactivate', $actions ) && in_array( $plugin_file, $this->block_deactivate))
            unset( $actions['deactivate'] );
        return $actions;
    }

    // Add Stackspin Menu item and page in the dashboard menu
    public function stackspin_admin_page() {
        add_menu_page(
            __( 'Stackspin', 'stackspin_plugin' ),
            'Stackspin',
            'manage_options',
            STACKSPIN_DIR_NAME . '/stackspin-plugin-admin.php',
            '',
            plugins_url( STACKSPIN_DIR_NAME . '/assets/images/logo.png' ),
            98
        );
    }
}