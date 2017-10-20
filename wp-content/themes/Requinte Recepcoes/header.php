<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo get_bloginfo('display', 'description'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" href="<?php echo bloginfo('template_directory'); ?>favicon.ico">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/reset.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/animate.css"><!--  animate -->

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	
	<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script> <!-- jquery -->
	<script src="http://mynameismatthieu.com/WOW/dist/wow.min.js"></script> <!-- wow animation -->
	<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/controller.js"></script>
	<script>
 		new WOW().init();
	</script>
</head>
<?php wp_head() ?>