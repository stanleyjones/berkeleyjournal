<?php

/**
 *	Layout Engine (http://scribu.net/wordpress/theme-wrappers.html)
 */

function main_template_path() {
	return Layout_Engine::$main_template;
}
function main_template_base() {
	echo Layout_Engine::$base;
}

class Layout_Engine {
	static $main_template;
	static $base;
	static function wrap($template) {
		self::$main_template = $template;
		self::$base = substr(basename(self::$main_template), 0, -4);

		if (self::$base === 'index') {
			self::$base = false;
		}

		$templates = array('layout.php');

		if (self::$base) {
			array_unshift($templates, sprintf('layout-%s.php', self::$base ));
		}
		
		return locate_template($templates);
	}
}
add_filter('template_include', array('Layout_Engine', 'wrap'), 99);

/**
 *	Nest templates for category children
 */

function nest_category_template($orig_template) {
	global $wp_query;
	if (!is_category()) { return $orig_template; }

	$cat = $wp_query->get_queried_object();
	while ($cat && !is_wp_error($cat)) {
		$template = TEMPLATEPATH . "/category-{$cat->slug}.php";
		if (file_exists($template)) { return $template; }
		$cat = $cat->parent ? get_category($cat->parent) : false;
	}
	return $orig_template;
}
add_filter('template_include', 'nest_category_template', 98);