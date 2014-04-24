<?php setup_postdata($post); ?>
<article class="post row">
	<div class="col-md-6 col-md-offset-3">
		<h3 class="post-title"><?php the_title(); ?></h3>
		<!-- <p class="post-deck"><?php the_excerpt(); ?></p> -->
		<footer class="post-meta"><?php the_author(); ?> &bull; <?php the_time('F j, Y'); ?> &bull; <?php the_category(' '); ?></footer>
	</div>
</article>