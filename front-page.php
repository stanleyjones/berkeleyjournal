<?php $page_id = get_the_ID(); ?>
<div class="home-content tab-content container">
	<div id="latest" class="tab-pane">
		<section class="featured col-md-9">
<?php
	$featured = get_featured_posts();
	foreach($featured as $post) { get_template_part('tpl/post', 'featured'); }
?>
		</section>
		<section class="unfeatured col-md-3">
<?php
	$latest = get_latest_posts();
	foreach($latest as $post) { get_template_part('tpl/post'); }
?>
		</section>
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
		<section><?php the_page_content('magazine'); ?></section>
	</div>
</div>