<?php
/**
 * Plugin Name: Custom Portfolio
 * Description: A Custom plugin setupo to create a custom Portfolio post 
 * type with category and shortcode display.
 * Version: 1.0
 * Author: Favour Oluwadamilare
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'includes/post-type.php';
require_once plugin_dir_path(__FILE__) . 'includes/taxonomy.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

function cp_activate_plugin() {
    cp_register_portfolio_post_type();
    cp_register_portfolio_category_taxonomy();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'cp_activate_plugin');


// end.... fAVOUR