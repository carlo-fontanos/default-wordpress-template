<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    
	<title><?php global $page; wp_title('|', true, 'right'); bloginfo( 'name' ); ?></title>

    <link rel="SHORTCUT ICON" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/bootstrap.min.js"></script>

    <?php
		wp_head();
		global $header_options;
		if (!empty($header_options)) {
			foreach ($header_options as $key => $value) { $$key = $value; }
		}
    ?>
</head>

<body>

	<section class = "header-wrapper">
		<section class = "container">
			<section class  ="col-md-12">
				<section class = "row header">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo $logourl; ?>" class = "logo" /></a>
					<nav><?php wp_nav_menu( array('theme_location'	=> 'primary')); ?></nav>
				</section>
			</section>
		</section>
	</section>

<?php if(is_front_page()): ?>
	<section class = "banner-wrapper">
		<section class = "container">
			<section class  ="col-md-12">
				<section class = "row banner">
					
				</section>
			</section>
		</section>
	</section>
<?php endif; ?>
    
    
        






