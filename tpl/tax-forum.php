<?php global $tax; ?>
<div class="tax tax-forum">
	<h6 class="tax-label">Forum</h6>
	<h3 class="tax-name"><a href="<?php echo get_category_link($tax->term_id); ?>"><?php echo $tax->name; ?></a></h3>
	<p class="tax-description"><?php echo $tax->description; ?></p>
</div>