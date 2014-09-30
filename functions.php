<?php

	foreach (glob(get_template_directory() . '/inc/*.php') as $filename) { require $filename; }

	function bjos_login_redirect( $redirect_to, $request, $user ) {
		return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : site_url();
	}
	add_filter( 'login_redirect', 'bjos_login_redirect', 10, 3 );

	function bjos_remove_admin_bar() {
		if (!current_user_can('administrator') && !is_admin()) { show_admin_bar(false); }
	}
	add_action('after_setup_theme', 'bjos_remove_admin_bar');