<?php

function saulsme_customize_css()
{

    ?>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

<style type="text/css">

/*
 ***********************
 *=title_tagline
 ***********************
 */
	#masthead hgroup h1 a{
		font-family: <?php echo get_theme_mod('logo-font', $default); ?>;
		color: <?php echo get_theme_mod('logo-color', $default); ?>;
	}
	#masthead hgroup h1 a:hover {
		color: <?php echo get_theme_mod('logo-hover-color', $default); ?>;
	}
/*
 ***********************
 *=colors =fonts
 ***********************
 */

	#content h1, #content h2, #content h3, #content h4, #content h5, #content h6 {
		color: <?php echo get_theme_mod('headers-color', $default); ?>;
		line-height: <?php echo (float)( get_theme_mod('content-line-height', $default) ); ?>em;
		font-family: <?php echo get_theme_mod('content-headings', $default); ?>;
	}

	#content h1 {
		font-size: <?php echo (float)( get_theme_mod('heading-one-size', $default) ); ?>px;
	}
	#content h2 {
		font-size: <?php echo (float)( get_theme_mod('heading-two-size', $default) ); ?>px;
	}
	#content h3 {
		font-size: <?php echo (float)( get_theme_mod('heading-three-size', $default) ); ?>px;
	}
	#content h4 {
		font-size: <?php echo (float)( get_theme_mod('heading-four-size', $default) ); ?>px;
	}
	#content h5 {
		font-size: <?php echo (float)( get_theme_mod('heading-five-size', $default) ); ?>px;
	}
	#content h6 {
		font-size: <?php echo (float)( get_theme_mod('heading-six-size', $default) ); ?>px;
	}

	#content {
		color: <?php echo get_theme_mod('content-color', $default); ?>;
		line-height: <?php echo (float)( get_theme_mod('content-line-height', $default) ); ?>em;
		font-family:<?php echo get_theme_mod('content-paragraph', $default); ?>;
		font-size: <?php echo (float)( get_theme_mod('content-font-size', $default) ); ?>px;
	}

	#content a {
		color: <?php echo get_theme_mod('link-color', $default); ?>;
	}

	#content a:hover {
		color: <?php echo get_theme_mod('link-hover-color', $default); ?>;
	}

/*
 ***********************
 *=nav
 ***********************
 */
	#menu a {
		font-family:<?php echo get_theme_mod('nav-fonts', $default); ?>;
		font-size: <?php echo (float)( get_theme_mod('nav-size', $default) ); ?>px;
		color: <?php echo get_theme_mod('nav-color', $default); ?>;
	}
	#menu a:hover {
		color: <?php echo get_theme_mod('nav-hover-color', $default); ?>;
	}
	#menu li.current-menu-item a {
		color: <?php echo get_theme_mod('nav-active-color', $default); ?>;
	}

/*
 ***********************
 *=Home Page
 ***********************
 */
	#content .home-h {
		font-family: <?php echo get_theme_mod('intro-heading-font', $default); ?>;
		font-size: <?php echo (float)( get_theme_mod('intro-heading-size', $default) ); ?>px;
		color: <?php echo get_theme_mod('intro-heading-color', $default); ?>;
	}

	#content .home-p {
		font-family: <?php echo get_theme_mod('intro-sententce-font', $default); ?>;
		font-size: <?php echo (float)( get_theme_mod('intro-sententce-size', $default) ); ?>px;
		color: <?php echo get_theme_mod('intro-sententce-color', $default); ?>;
	}

/*
 ***********************
 *=FAQ Page
 ***********************
 */
	.faqs dt {
		padding: 5px;
		font-family: <?php echo get_theme_mod('faq-question-font', 'Arial, Helvetica, sans-serif'); ?>;
		font-size: <?php echo (float)( get_theme_mod('faq-question-size', '20') ); ?>px;
		font-weight: normal;
		color: <?php echo get_theme_mod('faq-question-color', '#999999'); ?>;
	}
	.faqs dt:hover {
		cursor: pointer;
		color: <?php echo get_theme_mod('faq-question-hover-color', '#ffffff'); ?>;
	}
	.faqs .activefaq {
		color: <?php echo get_theme_mod('faq-question-hover-color', '#ffffff'); ?>;
	}

</style>



    <?php
}
add_action( 'wp_head', 'saulsme_customize_css');	




?>