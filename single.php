<div class="container-fluid">
	<div class="row">
<?php while (have_posts()) : the_post(); ?>
		<div class="col-sm-9"><?php get_template_part('tpl/single', get_post_format()); ?></div>
<?php endwhile; ?>
		<div class="col-sm-3 hidden-xs"><?php get_sidebar('single'); ?>
	</div>
</div>