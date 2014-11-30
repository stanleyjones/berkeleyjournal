<section class="archive row">
	<div class="col-md-3">
<?php
	if (is_author()) :
		$author = get_userdata(get_query_var('author'));
		get_template_part('tpl/tax-author');
	elseif (is_category()) :
		$tax = get_category(get_query_var('cat'));
		get_template_part('tpl/tax-category');
	elseif (is_tag()) :
		$tax = get_tag(get_query_var('tag_id'));
		get_template_part('tpl/tax-topic');
	endif;
?>
	</div>
	<div class="col-md-9">
		<?php $ind = 0; $row = 3; $max = count($posts); while (have_posts()) : the_post(); ?>
			<?php if ($ind % 3 == 0) : ?><div class="row"><?php endif; ?>
			<div class="col-md-4"><?php get_template_part('tpl/post'); ?></div>
			<?php if ($ind == $max - 1 || $ind % $row == ($row - 1)) : ?></div><?php endif; ?>
			<?php $ind++; ?>
		<?php endwhile; ?>
	</div>
	<div class="col-md-12 text-center">
		<p><span class="btn btn-primary more-link"><?php next_posts_link('More'); ?></a></span></p>
	</div>
</section>