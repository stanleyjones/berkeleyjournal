<?php while ( have_posts() ) : the_post();
	get_template_part('tpl/page');
	endwhile;