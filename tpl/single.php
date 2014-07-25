<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<header class="col-md-8 col-md-offset-2 single-header">
		<h1 class="single-title"><?php the_title(); ?></h1>
		<?php if (has_excerpt()) : ?><p class="single-deck"><?php the_excerpt(); ?></p><?php endif; ?>
		<div class="single-byline"><?php the_byline(); ?></div>
	</header>
	<div class="col-md-12"><?php the_banner(); ?></div>
	<div class="col-md-8 col-md-offset-2"><?php global $more; ?>
		<?php if (has_more()) : ?>
		<div class="single-lead"><?php $more = 0; the_content(''); ?></div>
		<div class="single-content"><?php $more = 1; the_content('', true); ?></div>
		<?php else : ?>
		<div class="single-content"><?php $more = 1; the_content(''); ?></div>
		<?php endif; ?>
	</div>
	<?php if(in_forum()) : ?>
		<div class="forum-navigation col-md-8 col-md-offset-2">
			<hr>
			<h4><small>More in</small> <?php echo the_category(' '); ?></h4>
			<div class="row">
				<div class="col-xs-6"><small>Previous Article</small><br><?php previous_post_link('&laquo; %link', '%title', true); ?></div>
				<div class="col-xs-6 text-right"><small>Next Article</small><br><?php next_post_link('%link &raquo;', '%title', true); ?></div>
			</div>
		</div>
	<?php endif; ?>
</article>