<?php
	// Theme setup function

function sherpath_themes_setup() {
	// Add CSS
	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all');

	// Add JS
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'sherpath_themes_setup');