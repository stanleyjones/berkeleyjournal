<?php

/**
 *	Add shortcodes
 */

// [short_code]

function shortcode_function( $atts ) {
	extract( shortcode_atts(array(
		'field' => ''
	), $atts ));
	return '<span class="'.$atts[0].'">{{'.$atts[0].'}}</span>';
}
add_shortcode( 'short_code', 'shortcode_function' );