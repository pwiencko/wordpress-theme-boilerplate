<?php

include_once ABSPATH . 'wp-admin/includes/plugin.php';
 
if ( is_plugin_active( 'advanced-custom-fields/acf.php' ) || is_plugin_active('advanced-custom-fields-pro/acf.php')) {
	add_filter('acf/settings/save_json', 'custom_acf_json_save_point');

	function custom_acf_json_save_point($path) {
		$path = get_stylesheet_directory() . '/acf-json';
		return $path;
	}
} 