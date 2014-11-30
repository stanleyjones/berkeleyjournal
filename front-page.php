<?php $page_id = get_the_ID(); ?>
<div class="home-content tab-content">
	<div id="latest" class="tab-pane">
		<section class="featured col-sm-9">
<?php
	$featured = get_featured_posts();
	foreach($featured as $post) { get_template_part('tpl/post', 'featured'); }
?>
			<a class="btn btn-primary more-link" href="<?php echo get_category_link(get_cat_ID('articles')); ?>">More</a>
		</section>
		<section class="unfeatured col-sm-3">
<?php
	$latest = get_latest_posts(array('posts_per_page' => 4));
	foreach($latest as $post) { get_template_part('tpl/post'); }
?>
			<a class="btn btn-primary more-link" href="<?php echo get_category_link(get_cat_ID('articles')); ?>">More</a>

		</section>
	</div>
	<div id="forum" class="tab-pane">
<?php
	if ($tax = get_sticky_forum($page_id)) {
		get_template_part('tpl/tax');
	}
		get_template_part('tpl/forums');
?>
	</div>
	<div id="blog" class="tab-pane">
<?php
	$tax = get_category_by_slug('blog');
	get_template_part('tpl/tax');
?>
	</div>
	<div id="magazine" class="tab-pane">
		<section><?php the_page_content('print'); ?></section>
	</div>
	<div id="search" class="tab-pane">
		<?php get_search_form(); ?>
	</div>
</div>