<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package AppStyle
 * @since AppStyle 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"  />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- The favicon -->
<link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon-upload', $default); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php // echo get_theme_mod( 'headers-color', $default); ?>


<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<div class="header-wrapper">
				<hgroup>
					<?php if ( get_theme_mod( 'show_site_title', $default ) ): ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a></h1>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'show_logo', '' ) ): ?>
						<div class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_theme_mod( 'logo-upload', '' ) ?>">
						</a></div>
					<?php endif; ?>
					<!-- <h2 class="site-description"> -->
						<?php //bloginfo( 'description' ); ?>
					<!-- </h2> -->

				</hgroup>

				<nav role="navigation" class="main-navigation clearfix"> <!-- site-navigation  -->
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'container' => false,
						'menu_id' => 'menu',
						) 
					); ?>
				</nav><!-- .site-navigation .main-navigation -->
			</div><!-- end header-wrapper -->
		</div>
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">
