<?php
	global $tax; // Sticky Forum
	$forum_category = get_category_by_slug('forum');
	$forums = get_categories(array(
		'parent' => $forum_category->term_id,
		'exclude' => $tax->term_id
	));
	if ($forums) {
?>
	<hr>
	<h4>All Forums</h4>
	<div class="row">
<?php
		foreach ($forums as $tax) {
?>
		<div class="col-sm-3">
<?php
		 get_template_part('tpl/tax-forum');
?>
		<p><a class="btn btn-primary more-link" href="<?php echo get_category_link($tax); ?>">Read</a></p>
		</div>
<?php
		}
?>
	</div>
<?php
	}
?>