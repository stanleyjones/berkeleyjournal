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
		<?php while (have_posts()) { the_post(); get_template_part('tpl/post'); } ?>
	</div>
</section>