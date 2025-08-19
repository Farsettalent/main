<?php
function farsettalent_enqueue_scripts() {
    wp_enqueue_style('farsettalent-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'farsettalent_enqueue_scripts');

function farsettalent_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
}
add_action('after_setup_theme', 'farsettalent_register_menus');

// ACF Support
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
