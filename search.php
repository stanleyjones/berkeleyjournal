<?php get_search_form(); ?>
<hr>

<section class="search row">
	<div class="col-md-3">
		<div class="tax tax-category">
			<h6 class="tax-label">Search</h6>
			<h3 class="tax-name">"<?php the_search_query(); ?>"</h3>
			<p class="tax-description">Showing results for your search.</p>
		</div>
	</div>
	<div class="col-md-9">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-4"><?php get_template_part('tpl/post'); ?></div>
		<?php endwhile; ?>
	</div>
</section>