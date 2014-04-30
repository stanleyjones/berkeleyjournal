<?php setup_postdata($post); ?>
<article class="post post-featured row">
	<div class="col-xs-3"><?php the_thumbnail(); ?></div>
	<div class="col-xs-7">
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-deck"><?php the_excerpt(); ?></p>
		<footer class="post-meta"><?php the_byline(); ?></footer>
	</div>
	<div class="col-md-2 hidden-xs">
		<div class="post-stats">
			<i class="fa fa-comment"></i> <?php comments_number('0', '1', '%'); ?> comments<br>
			<i class="fa fa-clock-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
		</div>
	</div>
</article>