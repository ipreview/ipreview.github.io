<?php
/**
 * AppStyle Theme Customizer
 *
 * @package AppStyle
 * @since AppStyle 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since AppStyle 1.2
 */
function saulsme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'saulsme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since AppStyle 1.2
 */
function saulsme_customize_preview_js() {
	wp_enqueue_script( 'saulsme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'saulsme_customize_preview_js' );

/*
 ***************************************************************
 *=Saulsme Theme customizer
 ***************************************************************
 */ 

// Add customizer menu to Appearance option
function saulsme_customizer_menu() {
    add_theme_page( 
    	__('Customize', 'saulsme' ), 
    	__('Customize', 'saulsme' ), 
    	'edit_theme_options', 
    	'customize.php' // don't put a , here 
    );
}
add_action( 'admin_menu', 'saulsme_customizer_menu' );


/*
 ***************************************************************
 *=customizer List:
 #static_front_page (default) reset 'priority' => 1
 #title_tagline (default) 'priority' => 20
 #background_image (default) reset 'priority' => 10
 #colors (default)
 #fonts 50
 #Header 90
 #Nav (default) 'priority' => 100
 #Home Page 300
 #FAQ Page 500
 #Footer 1000

 ***************************************************************
 */ 
function saulsme_customizer( $wp_customize ) {
	require_once('customizer-header.php');
	require_once('customizer-colors.php');
	require_once('customizer-fonts.php');
	require_once('customizer-pages.php');


    $wp_customize->add_section(
        'static_front_page',
        array(
            'title' => __('Static Front Page', 'saulsme' ),
            'priority' => 1,
        )
    );

    $wp_customize->add_section(
        'background_image',
        array(
            'title' => __('Background Image', 'saulsme' ),
            'priority' => 20,
        )
    );
	/*
	 ***********************
	 *=Footer
	 ***********************
	 */
	// Add a section, Footer
    $wp_customize->add_section(
        'section_footer',
        array(
            'title' => __('Footer', 'saulsme' ),
            'priority' => 1000,
        )
    );

    // Add a setting, text
    $wp_customize->add_setting(
	    'copyright_text', // The unique ID of this setting.
	    array(
	        'default' => 'Copyright 2013',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'copyright_text', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Copyright text', 'saulsme' ),
	        'section' => 'section_footer',
	        'type' => 'text',
	    )
	);

}
add_action( 'customize_register', 'saulsme_customizer' );




