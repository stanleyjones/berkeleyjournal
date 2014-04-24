<?php

/**
 *	Modify 'Post' post type
 */

add_theme_support( 'post-thumbnails' );

function get_featured_posts($args = array()) {
	$args = array_merge($args, array(
		'post__in' => get_option('sticky_posts'),
		'category' => $args['category'] || get_option('default_category')
	));
	return get_posts($args);
}

function get_latest_posts($args = array()) {
	$args = array_merge($args, array(
		'post__not_in' => get_option('sticky_posts'),
		'category' => $args['category'] || get_option('default_category')
	));
	return get_posts($args);
}
