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