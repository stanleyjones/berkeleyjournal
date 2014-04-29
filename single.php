<?php
	while (have_posts()) { the_post(); get_template_part('tpl/single', get_post_format()); }
	get_sidebar('single');
?>