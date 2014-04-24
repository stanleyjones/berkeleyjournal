<?php

/**
 *	Add functions accessible via AJAX
 */

add_action('wp_ajax_nopriv_dummy_function', 'dummy_function');
add_action('wp_ajax_dummy_function', 'dummy_function');
 
function dummy_function() {
	return true;
}