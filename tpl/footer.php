<footer class="site-footer container">
	<div class="row">
		<div class="col-sm-3">
			<div class="static-menu"><?php the_stacked_menu('footer'); ?></div>
		</div>
		<div class="col-sm-6">
			<?php the_page_content('home'); ?>
			<h6 class="site-copyright"><a href="http://creativecommons.org/licenses/by-nc-nd/4.0/">CC BY-NC-ND 4.0</a> <?php echo Date('Y'); ?> <?php bloginfo('title'); ?>.</h6>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>