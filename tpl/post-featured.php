<?php setup_postdata($post); ?>
<article class="post post-featured row">
	<div class="col-md-2 col-md-offset-1"><img class="post-thumbnail" src="<?php the_post_thumbnail(); ?>"></div>
	<div class="col-md-7">
		<h1 class="post-title"><?php the_title(); ?></h1>
		<p class="post-deck"><?php the_excerpt(); ?></p>
		<footer class="post-meta"><?php the_author(); ?> &bull; <?php the_time('F j, Y'); ?> &bull; <?php the_category(' '); ?></footer>
	</div>
	<div class="col-md-2">
		<i class="fa fa-comment"></i> <?php comments_number('0', '1', '%'); ?> comments<br>
		<i class="fa fa-clock-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
	</div>
</article>