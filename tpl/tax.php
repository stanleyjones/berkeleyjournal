<?php global $tax; ?>
<section class="row">
	<div class="col-sm-3">
		<?php get_template_part('tpl/tax-category'); ?>
	</div>
	<div class="col-sm-9">
<?php
	$tax_posts = get_posts(array('category' => $tax->term_id));
	foreach ($tax_posts as $post) : 
?>
	<div class="col-sm-4"><?php get_template_part('tpl/post'); ?></div>
	<?php endforeach; ?>
	</div>
</section>