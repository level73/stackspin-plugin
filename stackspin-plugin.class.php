<?php

class WP_Stackspin
{
    public function __construct()
    {
        register_activation_hook(plugin_dir_path(__FILE__) . 'stackspin-plugin.php', array($this, 'activate'));
    }

    public function activate()
    {

    }
}