<?php
	$forum = get_category(get_query_var('cat'));
	if ($subforums = get_categories(array(
		'parent' => $forum->term_id,
		'number' => 3
	))) {
		$forums = $subforums;
	} else {
		$forums = array($forum);
	}
	foreach ($forums as $tax) :
?>
<section class="archive row">
	<div class="col-md-3">
		<?php get_template_part('tpl/tax-forum'); ?>
	</div>
	<div class="col-md-9">
		<div class="row">
<?php
	$tax_posts = get_posts(array('category' => $tax->term_id, 'posts_per_page' => -1));
	foreach ($tax_posts as $post) {
?>
			<div class="col-md-4"><?php get_template_part('tpl/post'); ?></div>
<?php
	}
?>
		</div>
	</div>
</section>
<?php endforeach; ?>