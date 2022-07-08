<?php 

function wp_boilerplate_theme_scripts() {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), $theme_version, true );

}
add_action( 'wp_enqueue_scripts', 'wp_boilerplate_theme_scripts' );