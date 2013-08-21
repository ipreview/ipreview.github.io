<?php
/**
 * AppStyle functions and definitions
 *
 * @package AppStyle
 * @since AppStyle 1.0
 */

/*
 ***************************************************************
The content of the starter theme
and mine:
require( get_template_directory() . '/inc/post-types.php' );
require( get_template_directory() . '/inc/customize-css.php' );
 ***************************************************************
 */ 

// require_once('inc/post-types.php');
require( get_template_directory() . '/inc/post-types.php' );


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since AppStyle 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 940; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'saulsme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since AppStyle 1.0
 */
function saulsme_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	require( get_template_directory() . '/inc/customize-css.php' );


	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on AppStyle, use a find and replace
	 * to change 'saulsme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'saulsme', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'saulsme' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // saulsme_setup
add_action( 'after_setup_theme', 'saulsme_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function saulsme_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'saulsme_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'saulsme_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since AppStyle 1.0
 */
function saulsme_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Footer widget left', 'saulsme' ),
		'id' => 'footer-widgets-left',
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-widgets-left">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer widget right', 'saulsme' ),
		'id' => 'footer-widgets-right',
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-widgets-right">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

}
add_action( 'widgets_init', 'saulsme_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function saulsme_scripts() {

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	// wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');

	wp_enqueue_style('bootstrap');
	// wp_enqueue_style('font-awesome');
	wp_enqueue_style('flexslider');
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
	wp_enqueue_script( 'jquery.flexslider-min', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'saulsme_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

// Initialize Slider
function saulsme_slider_initialize() { ?>
    <script type="text/javascript" charset="utf-8">
        jQuery(window).load(function() {
            jQuery('.flexslider').flexslider({
                animation: "fade",
                direction: "horizontal",
                slideshowSpeed: 7000,
                animationSpeed: 600
            });
        });
    </script>
<?php }
add_action( 'wp_head', 'saulsme_slider_initialize' );




