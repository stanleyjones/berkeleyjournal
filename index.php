<?php if (have_posts()) { while (have_posts()) { the_post(); get_template_part('tpl/post', get_post_type()); }}