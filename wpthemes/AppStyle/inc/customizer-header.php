<?php

/*
 ***************************************************************
List:
#title_tagline
#Header
#Nav
 ***************************************************************
 */ 	
	/*
	 ***********************
	 *=title_tagline
	 ***********************
	 */
	// add a setting, checkbox
	$wp_customize->add_setting(
	    'show_site_title'
	);
	// add the control
	$wp_customize->add_control(
    	'show_site_title',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Show Site Title', 'saulsme' ),
	        'section' => 'title_tagline',
	    )
	);

    // add a setting, Select lists
	$wp_customize->add_setting(
	    'logo-font',
	    array(
	        'default' => 'Arial, Helvetica, sans-serif',
	    )
	);
	// add the control 
	$wp_customize->add_control(
	    'logo-font',
	    array(
	        'type' => 'select',
	        'label' => __('Site Title Fonts', 'saulsme' ),
	        'section' => 'title_tagline',
	        // 'priority' => '10',
	        'choices' => array(
	            'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
	            'Georgia, serif' => 'Georgia, serif',
	            '"Times New Roman", Times, serif' => '"Times New Roman", Times, serif',
	            '"Arial Black", Gadget, sans-serif' => '"Arial Black", Gadget, sans-serif',
	            '"Comic Sans MS", cursive, sans-serif' => '"Comic Sans MS", cursive, sans-serif',
	            'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
	            '"Dancing Script", cursive' => '"Dancing Script", cursive',
	            'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
	            '"Trebuchet MS", Helvetica, sans-serif' => '"Trebuchet MS", Helvetica, sans-serif',
	            'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
	            '"Courier New", Courier, monospace' => '"Courier New", Courier, monospace',
	            '"Lucida Console", Monaco, monospace' => '"Lucida Console", Monaco, monospace',
	        ),
	    )
	);

	// add a setting, Color picker, Link
	$wp_customize->add_setting(
	    'logo-color',
	    array(
	        'default' => '#94CE00',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'logo-color',
	        array(
	            'label' => __('Site Title Color', 'saulsme' ),
	            'section' => 'title_tagline',
	            'settings' => 'logo-color',
	        )
	    )
	);

	// add a setting, Color picker, Link hover
	$wp_customize->add_setting(
	    'logo-hover-color',
	    array(
	        'default' => '#005580',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'logo-hover-color',
	        array(
	            'label' => __('Site Title Hover Color', 'saulsme' ),
	            'section' => 'title_tagline',
	            'settings' => 'logo-hover-color',
	        )
	    )
	);	



	/*
	 ***********************
	 *=Header
	 ***********************
	 */
	// Add a section, Header
    $wp_customize->add_section(
        'section_header',
        array(
            'title' => __('Header', 'saulsme' ),
            'priority' => 90,
        )
    );

    // add a setting, Image upload, favicon
    $wp_customize->add_setting( 'favicon-upload' );
	// add the control 
	$wp_customize->add_control(
	    new WP_Customize_Upload_Control(
	        $wp_customize,
	        'favicon-upload',
	        array(
	            'label' => __('Favicon', 'saulsme' ),
	            'section' => 'section_header',
	            'settings' => 'favicon-upload',
	        )
	    )
	);

    // add a setting, Image upload, logo
    $wp_customize->add_setting( 'logo-upload' );
	// add the control 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'logo-upload',
	        array(
	            'label' => __('Logo', 'saulsme' ),
	            'section' => 'section_header',
	            'settings' => 'logo-upload',
	        )
	    )
	);

	// add a setting, checkbox, show logo
	$wp_customize->add_setting(
	    'show_logo'
	);
	// add the control
	$wp_customize->add_control(
    	'show_logo',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Show Logo', 'saulsme' ),
	        'section' => 'section_header',
	    )
	);	

	/*
	 ***********************
	 *=nav
	 ***********************
	 */

// nav font
    // add a setting, Select lists
	$wp_customize->add_setting(
	    'nav-fonts',
	    array(
	        'default' => 'Arial, Helvetica, sans-serif',
	    )
	);
	// add the control 
	$wp_customize->add_control(
	    'nav-fonts',
	    array(
	        'type' => 'select',
	        'label' => __('Navigation Item Fonts', 'saulsme' ),
	        'section' => 'nav',
	        'priority' => '20',
	        'choices' => array(
	            'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
	            'Georgia, serif' => 'Georgia, serif',
	            '"Times New Roman", Times, serif' => '"Times New Roman", Times, serif',
	            '"Arial Black", Gadget, sans-serif' => '"Arial Black", Gadget, sans-serif',
	            '"Comic Sans MS", cursive, sans-serif' => '"Comic Sans MS", cursive, sans-serif',
	            'Impact, Charcoal, sans-serif' => 'Impact, Charcoal, sans-serif',
	            '"Dancing Script", cursive' => '"Dancing Script", cursive',
	            'Tahoma, Geneva, sans-serif' => 'Tahoma, Geneva, sans-serif',
	            '"Trebuchet MS", Helvetica, sans-serif' => '"Trebuchet MS", Helvetica, sans-serif',
	            'Verdana, Geneva, sans-serif' => 'Verdana, Geneva, sans-serif',
	            '"Courier New", Courier, monospace' => '"Courier New", Courier, monospace',
	            '"Lucida Console", Monaco, monospace' => '"Lucida Console", Monaco, monospace',

	        ),
	    )
	);
    // Add a setting, text
    $wp_customize->add_setting(
	    'nav-size', // The unique ID of this setting.
	    array(
	        'default' => '14',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'nav-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Navigation Item Font Size', 'saulsme' ),
	        'section' => 'nav',
	        'type' => 'text',
	        'priority' => '30',
	    )
	);		

// nav color
	// add a setting, Color picker
	$wp_customize->add_setting(
	    'nav-color',
	    array(
	        'default' => '#999999',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'nav-color',
	        array(
	            'label' => __('Navigation Item Color', 'saulsme' ),
	            'section' => 'nav',
	            'settings' => 'nav-color',
		        'priority' => '40',
	        )
	    )
	);

	$wp_customize->add_setting(
	    'nav-hover-color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'nav-hover-color',
	        array(
	            'label' => __('Navigation Item Hover Color', 'saulsme' ),
	            'section' => 'nav',
	            'settings' => 'nav-hover-color',
		        'priority' => '50',
	        )
	    )
	);

	$wp_customize->add_setting(
	    'nav-active-color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'nav-active-color',
	        array(
	            'label' => __('Navigation Item Active Color', 'saulsme' ),
	            'section' => 'nav',
	            'settings' => 'nav-active-color',
		        'priority' => '60',
	        )
	    )
	);

?>