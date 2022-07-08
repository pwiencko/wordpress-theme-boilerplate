<?php 

function wp_boilerplate_theme_stylesheets() {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version);
}
add_action( 'wp_enqueue_scripts', 'wp_boilerplate_theme_stylesheets' );