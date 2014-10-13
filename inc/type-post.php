<?php

/**
 *	Modify 'Post' post type
 */

add_theme_support('post-thumbnails');
add_image_size('small', 320, 320, true);

function get_featured_posts($args = array()) {
	$args = array_merge($args, array(
		'post__in' => get_option('sticky_posts'),
		'category' => $args['category'] || '', //get_option('default_category')
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
	global $author;
	if (!isset($author)) { return false; }
	$args = array_merge($args, array(
		'author' => $author->ID
	));
	return get_posts($args);
}

function get_byline() {
	$byline = array(get_the_time(get_option('date_format')));
	if (function_exists('coauthors_posts_links')) {
		$byline[] = coauthors_posts_links(null, null, null, null, false);
	} else {
		$byline[] = the_author_posts_link();
	}
	if (has_category()) { $byline[] = get_the_category_list(' '); }
	if (has_tag()) { $byline[] = get_the_tag_list('', ' / '); }
	return implode(' &bull; ', $byline);
}
function the_byline() { echo get_byline(); }

function get_authors() {
	if (function_exists('coauthors')) {
		return coauthors(null, null, null, null, false);
	} else {
		return get_the_author();
	}
}
function the_authors() {
	echo get_authors();
}

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
function has_thumbnail_caption() {
	return get_post_field('post_excerpt', get_post_thumbnail_id($post->ID)) !== '';
}
function the_thumbnail_caption($args = array()) {
	$featured_image_id = get_post_thumbnail_id($post->ID);
	if ($featured_image_id && $caption = get_post_field('post_excerpt', $featured_image_id)) {
		echo $caption;
	}
}

function has_more() {
	global $post;
	return (strpos($post->post_content, '<!--more-->'));
}

function in_forum() {
	if (has_category()) { $post_category = get_the_category(); }
	$forum_category = get_category_by_slug('forum');
	return ($post_category[0]->parent == $forum_category->term_id);
}