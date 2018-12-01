<!doctype html>
<html>
<head>
	<?php $home = get_template_directory_uri(); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= $home ?>/reset.css">
	<link rel="stylesheet" href="<?= $home; ?>/style.css">
	<link rel="stylesheet" href="<?= $home; ?>/assets/css/comum.css">
	<link rel="stylesheet" href="<?= $home; ?>/assets/css/header.css">
	<link rel="stylesheet" href="<?= $home; ?>/assets/css/<?= $css_especifico;?>.css">
	<title>
		<?php geraTitle();?>
	</title>

	<?php	wp_head(); ?>
</head>
<header>
	<div class="container">
		<?php
			$args = array( 'theme_location' => 'header-menu');
			wp_nav_menu( $args ); 
		?>
	</div>

</header>
<body>