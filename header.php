<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<title><?php wp_title('', true, 'right'); ?></title>

    <link rel="SHORTCUT ICON" href="favicon.ico" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans">
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <?php
		wp_head();
		global $header_options;
		if (!empty($header_options)) { foreach ($header_options as $key => $value) { $$key = $value; } }
    ?>
</head>

<body <?php body_class(); ?>>

	<div class="header-wrapper">
		<div class="container">
			<div class="row header">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo $logourl; ?>" class="logo" /></a>
				<nav><?php wp_nav_menu( array('theme_location'	=> 'primary')); ?></nav>
			</div>
		</div>
	</div>
    
    
        






