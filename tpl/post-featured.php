<?php setup_postdata($post); ?>
<article class="post post-featured row">
	<?php if (has_post_thumbnail($post->ID)) : ?>
	<div class="col-sm-5"><div class="post-thumbnail"><?php the_thumbnail('small', 'thumb'); ?></div></div>
	<div class="col-sm-5"><?php else : ?>
	<div class="col-sm-10">
<?php endif; ?>
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-deck"><?php the_excerpt(); ?></p>
		<footer class="post-meta"><?php the_byline(); ?></footer>
	</div>
	<div class="col-sm-2 hidden-xs">
		<div class="post-stats">
			<i class="fa fa-comment"></i> <?php comments_number('0', '1', '%'); ?> comments<br>
			<i class="fa fa-clock-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
		</div>
	</div>
</article>