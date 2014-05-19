<div class="author">
	<h3 class="author-name"><?php echo $author->display_name; ?></h3>
	<p class="author-bio"><?php echo $author->description; ?></p>

<?php $posts = get_author_posts(); if ($posts) : ?>
	<ul>
<?php foreach ($posts as $post) : setup_postdata($post); ?>
		<li class="post-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><span class="post-meta"><?php the_time('F j, Y'); ?> &bull; <?php the_category(' '); ?></span></li>
<?php endforeach; ?>
	</ul>
	<a class="btn btn-primary more-link" href="<?php echo get_author_posts_url($author->ID); ?>">More</a>
<?php endif; ?>
</div>