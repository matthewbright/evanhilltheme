<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		<?php wp_head(); ?>
		<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js" type="text/javascript"></script>
			<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js" type="text/javascript"></script>
		<![endif]-->
		<script type="text/javascript">
			//<![CDATA[
            var $ = jQuery;
            //]]>
        </script>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<?php if ( is_front_page() ) { ?>
				<h1>Home Page</h1>
				<header id="home-header" role="banner">
					<section id="branding">
						<div id="site-title"><h1><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr_e( get_bloginfo('name'), 'evanhill' ); ?>" rel="home"><?php echo esc_html( get_bloginfo('name') ); ?></a></h1></div>
						<div id="site-description"><?php bloginfo('description'); ?></div>
					</section>
					<nav id="menu" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</header>
			<?php } else { 
				// Page header for all pages NOT the home page
			?>

				<header id="header" role="banner">
					<section id="branding">
						<div id="site-title"><h1><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr_e( get_bloginfo('name'), 'evanhill' ); ?>" rel="home"><?php echo esc_html( get_bloginfo('name') ); ?></a></h1></div>
						<div id="site-description"><?php bloginfo('description'); ?></div>
					</section>
					<nav id="menu" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</header>

			<?php } ?>
			<div id="container">