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
add_action('init','register_custom_menus');

function register_custom_sidebars() {
	register_sidebar(array(
		// 'single' => 'Article Sidebar'
	));
}
add_action('init','register_custom_sidebars');