<div class="home-menu"><?php the_tabbed_menu('home'); ?></div>
<div class="home-content tab-content">
	<div id="latest" class="tab-pane">
<?php
	$featured = get_featured_posts();
	foreach($featured as $post) { get_template_part('tpl/post', 'featured'); }
	$latest = get_latest_posts();
	foreach($latest as $post) { get_template_part('tpl/post'); }
?>
	</div>
	<div id="forum" class="tab-pane">
		<pre>[FORUM TAB]</pre>
	</div>
	<div id="blog" class="tab-pane">
		<pre>[BLOG TAB]</pre>
	</div>
	<div id="magazine" class="tab-pane">
		<pre>[MAGAZINE TAB]</pre>
	</div>
</div>