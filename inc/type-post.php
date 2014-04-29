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

function get_blog_posts($args = array()) {
	$args = array_merge($args, array(
		'category_name' => $args['category_name'] || 'blog'
	));
	return get_posts($args);
}

function get_author_posts_link() {

}

function get_byline() {
	$byline = array(
		get_the_time('F j, Y'),
		sprintf(
			'<a href="%1$s" rel="author">%2$s</a>',
			get_author_posts_url(get_the_author_meta('ID')),
			get_the_author()
		),
		get_the_category_list(' '),
		get_the_tag_list('', ' / ')
	);
	return implode(' &bull; ', $byline);
}
function the_byline() { echo get_byline(); }