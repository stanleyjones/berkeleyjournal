<header class="site-header">
	<div class="container">
		<a class="site-logo-container" href="/"><img class="site-logo svg" src="<?php the_site_logo('logo.svg'); ?>"></a>
		<div class="site-title-container">
			<h1 class="site-title"><a href="/"><?php bloginfo('title'); ?></a></h1>
			<p class="site-tagline"><?php bloginfo('description'); ?></p>
		</div>
	</div>
<?php if (is_front_page()) : ?>
	<div class="home-menu">
		<div class="container"><?php the_tabbed_menu('home'); ?></div>
	</div>
<?php endif; ?>
</header>