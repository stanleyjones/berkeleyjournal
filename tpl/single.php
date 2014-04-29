<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="col-md-10 col-md-offset-2 single-header">
		<h1 class="single-title"><?php the_title(); ?></h1>
		<p class="single-deck"><?php the_excerpt(); ?></p>
		<?php // image banner goes here ?>
		<div class="single-byline"><?php the_byline(); ?></div>
	</header>
	<div class="col-md-8 col-md-offset-2">
		<div class="single-lead"><?php global $more; $more = 0; the_content(''); ?></div>
		<div class="single-content"><?php global $more; $more = 1; the_content('', true); ?></div>
	</div>
</article>