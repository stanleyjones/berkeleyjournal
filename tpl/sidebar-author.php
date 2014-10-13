<div class="author">
	<h3 class="author-name"><?php echo $author->display_name; ?></h3>
	<p class="author-bio"><?php echo $author->description; ?></p>

<?php $posts = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'post_status' => 'publish',
		'author_name' => $author->user_login
	));
	if ($posts->have_posts()) : ?>
	<ul>
<?php while ($posts->have_posts()) : $posts->the_post(); ?>
		<li class="post-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><span class="post-meta"><?php the_time('F j, Y'); ?> &bull; <?php the_category(' '); ?></span></li>
<?php endwhile; ?>
	</ul>
	<a class="btn btn-primary more-link" href="<?php echo get_author_posts_url($author->ID); ?>">More</a>
<?php endif; ?>
</div>