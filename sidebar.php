<?php $post_id = get_the_ID(); $post_author_id = $post->post_author; ?>
<div id="sidebar" class="container-fluid">
	<div class="col-md-12">
		<p><?php echo do_shortcode('[ssba]'); ?></p>

		<div class="home-menu"><?php the_site_menu('home'); ?></div>
		<div class="static-menu"><?php the_site_menu('footer'); ?></div>
		<hr>
		<div class="sidebar-category">
<?php
	$taxes = get_the_category($post_id);
	include(locate_template('tpl/sidebar-tax.php'));
?>
		</div>
		<hr>
		<div class="sidebar-author">
<?php
	if (function_exists('get_coauthors')) { $authors = get_coauthors($post_id); }
	else { $authors = get_user_by('id', $post_author_id); }
	foreach ($authors as $author) {
		include(locate_template('tpl/sidebar-author.php'));
	}
?>
		</div>
	</div>
</div>