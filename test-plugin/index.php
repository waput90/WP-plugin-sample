<?php
/*
    Plugin Name: My Test Plugin
    Description: This plugin is for exclusive use only for Profit Farmers [profitfarmers_offer_timer /] [profitfarmers_offer_timer2 /]
    Author: Test dev
    Version: 1.5
    License: GPLv2 or later
*/

/*
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.
*/

class TestPlugin
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'load_test_scripts'), 100);
        add_shortcode('my-test-plugin', array($this, '_test_plugin'));
    }

    public function _test_plugin()
    {
        wp_enqueue_script('test-scripts1');
        function add_attribute_to_script_tag($tag, $handle) {
            switch($handle){
                case 'test-scripts1': return str_replace("type='text/javascript'", ' type="module"', $tag);
                default: return $tag;
            }
        }
        add_filter('script_loader_tag', 'add_attribute_to_script_tag', 10, 2);
        ob_start();

        include 'my-html.php';

        return ob_get_clean();
    }
    
    public function load_test_scripts()
    {
        wp_register_style('bootstrap-css-offer-timer', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        wp_register_style('fontawesome-all-offer-timer', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');
        wp_register_style('roboto-slab-offer-timer', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;800;900&display=swap');

        wp_register_script('angular-scripts', plugins_url('https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js'), false, true);
        
        wp_register_script('test-scripts1', plugins_url('/test-plugin/js/index.js', dirname(__FILE__)), array('jquery'), false, true);
    }
 
}
new TestPlugin;
