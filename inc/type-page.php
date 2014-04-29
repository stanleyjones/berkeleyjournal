<?php

/**
 *	Modify 'Page' post type
 */

function add_page_excerpts() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_page_excerpts' );

// Add Sticky Forum option on 'Home' page

function add_sticky_forum() {
	$page_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
	$front_page_id = get_option('page_on_front');
	if ($page_id == $front_page_id) {
		add_meta_box('sticky_forum', 'Featured Forum', 'add_sticky_forum_callback', 'page', 'side');
	}
}
add_action( 'add_meta_boxes', 'add_sticky_forum' );

function add_sticky_forum_callback($page) {
	wp_nonce_field('sticky_forum', 'sticky_forum_nonce');
	$value = get_post_meta($page->ID, '_sticky_forum_id', true);
	$forumParent = get_category_by_slug('forum');
	$forums = get_categories(array('parent' => $forumParent->term_id));
?>
	<select id="sticky_forum_id" name="sticky_forum_id">
		<option>(no forum)</option>
<?php foreach ($forums as $forum) { ?>
		<option value="<?php echo $forum->term_id; ?>"<?php if ($value == $forum->term_id) { ?> selected <?php } ?>><?php echo $forum->name; ?></option>
<?php } ?>
	</select>
<?php
}

function save_sticky_forum_meta($page_id) {
	if ( // Situations in which we don't want to save
		!isset($_POST['sticky_forum_nonce']) ||
		!wp_verify_nonce($_POST['sticky_forum_nonce'], 'sticky_forum') ||
		(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
		!current_user_can('edit_page', $page_id) ||
		!isset($_POST['sticky_forum_id'])
 	) { return; }

	$value = sanitize_text_field($_POST['sticky_forum_id']);
	update_post_meta($page_id, '_sticky_forum_id', $value);
}
add_action('save_post', 'save_sticky_forum_meta');

function get_sticky_forum($page_id) {
	$forum_id = get_post_meta($page_id, '_sticky_forum_id', true);
	return get_category($forum_id);
}