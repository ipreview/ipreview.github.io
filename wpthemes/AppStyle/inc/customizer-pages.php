<?php 

/*
 ***************************************************************
List:
#home page
#feature page
#faq Page
 ***************************************************************
 */ 
	/*
	 ***********************
	 *=Home Page
	 ***********************
	 */
	// Add a section, Home page
    $wp_customize->add_section(
        'section-home-page',
        array(
            'title' => __('Home Page', 'saulsme' ),
            'priority' => 300,
        )
    );	

    // Add a setting, text
    $wp_customize->add_setting(
	    'intro-heading', // The unique ID of this setting.
	    array(
	        'default' => "New Way to Enjoy Music",
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'intro-heading', 
	    array(
	        'label' => __('Intro Heading', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '2',
	    )
	);

    // add a setting, Select lists
	$wp_customize->add_setting(
	    'intro-heading-font',
	    array(
	        'default' => 'Arial, Helvetica, sans-serif',
	    )
	);
	// add the control 
	$wp_customize->add_control(
	    'intro-heading-font',
	    array(
	        'type' => 'select',
	        'label' => __('Intro Heading Font', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '3',
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
	    'intro-heading-size', // The unique ID of this setting.
	    array(
	        'default' => '38.5',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'intro-heading-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Intro Heading Font Size', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '4',
	    )
	);
	// add a setting, color
	$wp_customize->add_setting(
	    'intro-heading-color',
	    array(
	        'default' => '#0088cc',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'intro-heading-color',
	        array(
	            'label' => __('Intro Heading Color', 'saulsme' ),
	            'section' => 'section-home-page',
	            'settings' => 'intro-heading-color',
	  		    'priority' => '5',
	        )
	    )
	);

    // Add a setting, text
    $wp_customize->add_setting(
	    'intro-sententce', // The unique ID of this setting.
	    array(
	        'default' => "Enjoy Music Anytime, Anywhere, with Anyone!",
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'intro-sententce', 
	    array(
	        'label' => __('Intro Sententce', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '6',
	    )
	);

    // add a setting, Select lists
	$wp_customize->add_setting(
	    'intro-sententce-font',
	    array(
	        'default' => 'Arial, Helvetica, sans-serif',
	    )
	);
	// add the control 
	$wp_customize->add_control(
	    'intro-sententce-font',
	    array(
	        'type' => 'select',
	        'label' => __('Intro Sententce Font', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '7',
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
	    'intro-sententce-size', // The unique ID of this setting.
	    array(
	        'default' => '14',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'intro-sententce-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Intro Sententce Font Size', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '8',
	    )
	);
	// add a setting, color
	$wp_customize->add_setting(
	    'intro-sententce-color',
	    array(
	        'default' => '#999999',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'intro-sententce-color',
	        array(
	            'label' => __('Intro Sententce Color', 'saulsme' ),
	            'section' => 'section-home-page',
	            'settings' => 'intro-sententce-color',
	  		    'priority' => '9',
	        )
	    )
	);




/* The Download Links*/
	// add a setting, checkbox
	$wp_customize->add_setting(
	    'Hide-appstore'
	);
	// add the control
	$wp_customize->add_control(
    	'Hide-appstore',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Hide App Store Icon', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '10',
	    )
	);    

    // Add a setting, text
    $wp_customize->add_setting(
	    'appstore-link', // The unique ID of this setting.
	    array(
	        'default' => 'https://itunes.apple.com',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'appstore-link', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('App Store Link', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '15',
	    )
	);

	// add a setting, checkbox
	$wp_customize->add_setting(
	    'Hide-googleplay'
	);
	// add the control
	$wp_customize->add_control(
    	'Hide-googleplay',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Hide Google Play Icon', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '20',
	    )
	);    

    // Add a setting, text
    $wp_customize->add_setting(
	    'googleplay-link', // The unique ID of this setting.
	    array(
	        'default' => 'https://play.google.com',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'googleplay-link', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Google Play Link', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '25',
	    )
	);

	// add a setting, checkbox
	$wp_customize->add_setting(
	    'Hide-ios'
	);
	// add the control
	$wp_customize->add_control(
    	'Hide-ios',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Hide IOS Icon', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '30',
	    )
	);    

    // Add a setting, text
    $wp_customize->add_setting(
	    'ios-link', // The unique ID of this setting.
	    array(
	        'default' => 'https://itunes.apple.com',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'ios-link', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('IOS Link', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '35',
	    )
	);

	// add a setting, checkbox
	$wp_customize->add_setting(
	    'Hide-android'
	);
	// add the control
	$wp_customize->add_control(
    	'Hide-android',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Hide Android Icon', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '40',
	    )
	);    

    // Add a setting, text
    $wp_customize->add_setting(
	    'android-link', // The unique ID of this setting.
	    array(
	        'default' => 'https://play.google.com',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'android-link', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Android Link', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '45',
	    )
	);

	// add a setting, checkbox
	$wp_customize->add_setting(
	    'Hide-win'
	);
	// add the control
	$wp_customize->add_control(
    	'Hide-win',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Hide WinPhone Icon', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '50',
	    )
	);    

    // Add a setting, text
    $wp_customize->add_setting(
	    'win-link', // The unique ID of this setting.
	    array(
	        'default' => 'http://www.windowsphone.com/',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'win-link', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('WinPhone Link', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '55',
	    )
	);

	// add a setting, checkbox
	$wp_customize->add_setting(
	    'Hide-ovi'
	);
	// add the control
	$wp_customize->add_control(
    	'Hide-ovi',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Hide OVI Icon', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '60',
	    )
	);    

    // Add a setting, text
    $wp_customize->add_setting(
	    'ovi-link', // The unique ID of this setting.
	    array(
	        'default' => 'http://store.ovi.com/',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'ovi-link', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('OVI Link', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '65',
	    )
	);

	// add a setting, checkbox
	$wp_customize->add_setting(
	    'Hide-bb'
	);
	// add the control
	$wp_customize->add_control(
    	'Hide-bb',
	    array(
	        'type' => 'checkbox',
	        'label' => __('Hide Blackberry Icon', 'saulsme' ),
	        'section' => 'section-home-page',
	        'priority' => '70',
	    )
	);    

    // Add a setting, text
    $wp_customize->add_setting(
	    'bb-link', // The unique ID of this setting.
	    array(
	        'default' => 'http://www.blackberry.com/',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'bb-link', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Blackberry Link', 'saulsme' ),
	        'section' => 'section-home-page',
	        'type' => 'text',
	        'priority' => '75',
	    )
	);


	/*
	 ***********************
	 *=FAQ Page
	 ***********************
	 */
	// Add a section, Home page
    $wp_customize->add_section(
        'section-faq-page',
        array(
            'title' => __('FAQ Page', 'saulsme' ),
            'priority' => 500,
        )
    );

   // Add a setting, text
    $wp_customize->add_setting(
	    'faq-heading', // The unique ID of this setting.
	    array(
	        'default' => "FAQ",
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'faq-heading', 
	    array(
	        'label' => __('FAQ Heading Text', 'saulsme' ),
	        'section' => 'section-faq-page',
	        'type' => 'text',
	        'priority' => '2',
	    )
	);

    // add a setting, Select lists
	$wp_customize->add_setting(
	    'faq-question-font',
	    array(
	        'default' => 'Arial, Helvetica, sans-serif',
	    )
	);
	// add the control 
	$wp_customize->add_control(
	    'faq-question-font',
	    array(
	        'type' => 'select',
	        'label' => __('FAQ Question Font', 'saulsme' ),
	        'section' => 'section-faq-page',
	        'priority' => '3',
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
	    'faq-question-size', // The unique ID of this setting.
	    array(
	        'default' => '20',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'faq-question-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('FAQ Font Size', 'saulsme' ),
	        'section' => 'section-faq-page',
	        'type' => 'text',
	        'priority' => '4',
	    )
	);
	// add a setting, color
	$wp_customize->add_setting(
	    'faq-question-color',
	    array(
	        'default' => '#999999',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'faq-question-color',
	        array(
	            'label' => __('FAQ Question Color', 'saulsme' ),
	            'section' => 'section-faq-page',
	            'settings' => 'faq-question-color',
	  		    'priority' => '5',
	        )
	    )
	);

	$wp_customize->add_setting(
	    'faq-question-hover-color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'faq-question-hover-color',
	        array(
	            'label' => __('FAQ Question Hover, Acitve Color', 'saulsme' ),
	            'section' => 'section-faq-page',
	            'settings' => 'faq-question-hover-color',
	  		    'priority' => '5',
	        )
	    )
	);


?>