<?php $post_id = get_the_ID(); ?>
<div id="sidebar" class="container-fluid">
	<div class="col-md-12">
		<div class="home-menu"><?php the_site_menu('home'); ?></div>
		<div class="static-menu"><?php the_site_menu('footer'); ?></div>
		<hr>
		<div class="sidebar-author">
<?php
	$author = get_user_by('id', get_the_author_meta('ID'));
	include(locate_template('tpl/sidebar-author.php'));
?>
		</div>
		<hr>
		<div class="sidebar-category">
<?php
	$tax = get_the_category($post_id);
	include(locate_template('tpl/sidebar-tax.php'));
?>
		</div>
	</div>
</div>