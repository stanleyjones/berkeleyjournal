<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('tpl/head'); ?>

<body id="<?php main_template_base(); ?>" <?php body_class(is_single() ? 'min' : ''); ?>>

<?php get_template_part('tpl/header'); ?>

	<div id="wrap">
		<div id="content" class="<?php echo is_single() ? 'container-fluid' : 'container'; ?>">
			<?php include main_template_path(); ?>
		</div>
	</div>

<?php get_template_part('tpl/footer'); ?>

</body>
</html>