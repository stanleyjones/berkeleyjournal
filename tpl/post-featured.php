<?php setup_postdata($post); ?>
<article class="post post-featured row">
	<div class="col-sm-12"><h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
	<?php if (has_post_thumbnail($post->ID)) : ?>
	<div class="col-sm-12 col-md-5"><div class="post-thumbnail"><?php the_thumbnail('featured', 'thumb'); ?></div></div>
	<div class="col-sm-9 col-md-5"><?php else : ?>
	<div class="col-sm-9 col-md-10">
<?php endif; ?>
		<div class="post-deck"><?php the_excerpt(); ?></div>
		<footer class="post-meta"><?php the_byline(); ?></footer>
	</div>
	<div class="col-sm-3 col-md-2 hidden-xs">
		<div class="post-stats">
			<i class="fa fa-comment"></i> <?php comments_number('0', '1', '%'); ?> comments<br>
			<i class="fa fa-clock-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
		</div>
	</div>
</article>