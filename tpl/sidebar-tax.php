<?php foreach ($taxes as $tax) : ?>
<div class="tax">
	<h3 class="tax-name"><?php echo $tax->name; ?></h3>
	<p class="tax-description"><?php echo $tax->description; ?></p>

<?php $tax_posts = get_posts(array('category' => $tax->term_id)); if ($tax_posts) : ?>
	<ul>
<?php foreach ($tax_posts as $post) : setup_postdata($post); ?>
		<li class="post-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><span class="post-meta"><?php the_time('F j, Y'); ?> &bull; <?php the_category(' '); ?></span></li>
<?php endforeach; ?>
	</ul>
	<a class="btn btn-primary more-link" href="<?php echo get_category_link($tax->term_id); ?>">More</a>
<?php endif; ?>
</div>
<?php endforeach; ?>