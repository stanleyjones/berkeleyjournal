<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('tpl/head'); ?>

<body <?php body_class(); ?>>

<?php get_template_part('tpl/header'); ?>

	<div id="wrap">
		<div id="content" class="container">
			<?php include main_template_path(); ?>
		</div>
	</div>

<?php get_template_part('tpl/footer'); ?>

</body>
</html>