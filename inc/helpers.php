<?php

/**
 *	Helper functions
 */

function get_site_logo($filename = 'logo.png') {
	if (file_exists(get_stylesheet_directory() . '/img/' . $filename)) {
		return get_stylesheet_directory_uri() . '/img/' . $filename;
	}
}
function the_site_logo() { echo get_site_logo(); }

function the_site_menu($menu_slug = '', $args = array()) {
	return wp_nav_menu(array_merge($args, array('theme_location' => $menu_slug, 'depth' => 1, 'container' => '')));
}
function the_tabbed_menu($menu_slug = '') {
	return the_site_menu($menu_slug, array('menu_class' => 'nav nav-pills nav-justified'));
}
function the_stacked_menu($menu_slug = '') {
	return the_site_menu($menu_slug, array('menu_class' => 'nav nav-stacked'));
}

function get_page_content($slug) {
	$page = get_posts(array('post_type' => 'page', 'name' => $slug));
	if ($page) { return apply_filters('the_content', $page[0]->post_content); }
}
function the_page_content($slug) { echo get_page_content($slug); }

function google_fonts($fonts) {
	echo '<link href="http://fonts.googleapis.com/css?family=' . $fonts . ' rel="stylesheet">';
}