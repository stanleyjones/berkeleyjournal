<?php setup_postdata($post); ?>
<article class="post col-md-4">
	<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<p class="post-deck"><?php the_excerpt(); ?></p>
	<footer class="post-meta"><?php the_author(); ?> &bull; <?php the_time('F j, Y'); ?> &bull; <?php the_category(' '); ?></footer>
</article>