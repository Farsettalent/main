<?php
function farset_enqueue_styles() {
    wp_enqueue_style('farset-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'farset_enqueue_styles');
