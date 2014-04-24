<?php

/**
 *	Queue scripts and styles
 */

function theme_queue() {

	// Deregister WordPress default jQuery, since it's in main.js
	wp_deregister_script('jquery'); 

	// Pre-compiled via Grunt (see Gruntfile.js)
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/main.css', array(), filemtime(get_stylesheet_directory() . '/dist/main.css'));
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/dist/main.js', array(), filemtime(get_stylesheet_directory() . '/dist/main.js'), true);

	// Create AJAX.url
	wp_localize_script('main', 'AJAX', array( 'url' => admin_url( 'admin-ajax.php' )));

}
add_action('wp_enqueue_scripts', 'theme_queue', 99);