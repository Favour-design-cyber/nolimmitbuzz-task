<?php
function my_theme_setup() {
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_styles() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_styles');