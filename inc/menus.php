<?php

/**
 *	Add custom menus and sidebars
 */

function register_custom_menus() {
	register_nav_menus(array(
		'home' => 'Home Menu',
		'footer' => 'Footer Menu'
	));
}
add_action( 'init','register_custom_menus' );

function register_custom_sidebar() {
	register_sidebar(array(
		// 'sidebar_slug' => 'Sidebar Name'
	));
}
add_action( 'init','register_custom_sidebar' );