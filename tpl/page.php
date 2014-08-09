<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<header class="col-sm-12">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</header>
	<div class="col-sm-9 col-sm-offset-3">
		<div class="page-content"><?php the_content(); ?></div>
	</div>
</article>