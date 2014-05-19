<?php
	while (have_posts()) : the_post();
?>
<div class="container">
	<?php get_template_part('tpl/single', get_post_format()); ?>
</div>
<?php
	endwhile;
	get_sidebar('single');
?>