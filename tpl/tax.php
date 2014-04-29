<?php global $tax; ?>
<section class="row">
	<div class="col-md-3">
		<h3 class="tax-name"><?php echo $tax->name; ?></h3>
		<p class="tax-description"><?php echo $tax->description; ?></p>
	</div>
	<div class="col-md-9">
<?php
	$tax_posts = get_posts(array('category' => $tax->term_id));
	foreach ($tax_posts as $post) { get_template_part('tpl/post'); }
?>
	</div>
</section>