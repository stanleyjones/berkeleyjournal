<footer class="site-footer container">
	<div class="row">
		<div class="col-sm-6">
			<div class="static-menu"><?php the_stacked_menu('footer'); ?></div>
		</div>
		<div class="col-sm-6">
			<?php the_page_content('home'); ?>
			<h6 class="site-copyright">&copy;<?php echo Date('Y'); ?> <?php bloginfo('title'); ?>. All rights reserved.</h6>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>