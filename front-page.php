<?php $page_id = get_the_ID(); ?>
<div class="home-menu"><?php the_tabbed_menu('home'); ?></div>
<div class="home-content tab-content">
	<div id="latest" class="tab-pane">
<?php
	$featured = get_featured_posts();
	foreach($featured as $post) { get_template_part('tpl/post', 'featured'); }
?>
<?php
	$latest = get_latest_posts();
	foreach($latest as $post) { get_template_part('tpl/post'); }
?>
	</div>
	<div id="forum" class="tab-pane">
<?php
	$tax = get_sticky_forum($page_id);
	get_template_part('tpl/tax');
?>
	</div>
	<div id="blog" class="tab-pane">
<?php
	$tax = get_category_by_slug('blog');
	get_template_part('tpl/tax');
?>
	</div>
	<div id="magazine" class="tab-pane">
		<?php the_page_content('magazine'); ?>
	</div>
</div>