<header class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3"><a href="/"><img class="site-logo svg" src="<?php the_site_logo('logo.svg'); ?>"></a></div>
			<div class="col-xs-9">
				<h1 class="site-title"><a href="/"><?php bloginfo('title'); ?></a></h1>
				<p class="site-tagline"><?php bloginfo('description'); ?></p>
			</div>
		</div>
	</div>
<?php if (is_front_page()) : ?>
	<div class="home-menu">
		<div class="container"><?php the_tabbed_menu('home'); ?></div>
	</div>
<?php endif; ?>
</header>