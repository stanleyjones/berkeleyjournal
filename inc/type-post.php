<?php

/**
 *	Modify 'Post' post type
 */

add_theme_support('post-thumbnails');
add_image_size('small', 320, 320, true);

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
function get_author_posts($args = array()) {
	$args = array_merge($args, array(
		'author' => $author->ID
	));
	return get_posts($args);
}

function get_byline() {
	$byline = array(
		get_the_time('F j, Y'),
		sprintf(
			'<a href="%1$s" rel="author">%2$s</a>',
			get_author_posts_url(get_the_author_meta('ID')),
			get_the_author()
		)
	);
	if (has_category()) { $byline[] = get_the_category_list(' '); }
	if (has_tag()) { $byline[] = get_the_tag_list('', ' / '); }
	return implode(' &bull; ', $byline);
}
function the_byline() { echo get_byline(); }

function get_featured_image_src($size = 'thumbnail') {
	if ($featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size)) {
		return $featured_image[0];
	}
}
function the_thumbnail($size = 'small', $class = 'post-thumbnail') {
	if ($image = get_featured_image_src($size)) {
		echo sprintf('<img class="%1$s" src="%2$s">', $class, $image);
	}
}
function the_banner($size = 'large', $class = 'single-banner') {
	if ($image = get_featured_image_src($size)) {
		echo sprintf('<div class="%1$s" data-src="%2$s"></div>', $class, $image);
	}
}