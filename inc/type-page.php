<?php

/**
 *	Modify 'Page' post type
 */

function add_page_excerpts() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_page_excerpts' );