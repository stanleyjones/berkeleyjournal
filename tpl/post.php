<?php setup_postdata($post); ?>
<article class="post">
	<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<div class="post-deck"><?php the_excerpt(); ?></div>
	<footer class="post-meta"><?php the_byline(); ?></footer>
</article>