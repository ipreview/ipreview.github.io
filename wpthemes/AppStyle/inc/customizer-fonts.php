<?php
	
	/*
	 ***********************
	 *=fonts
	 ***********************
	 */
	// Add a section, Fonts
    $wp_customize->add_section(
        'section_fonts',
        array(
            'title' => __('Fonts', 'saulsme' ),
            'priority' => 50,
        )
    );

    // Add a setting, text
    $wp_customize->add_setting(
	    'content-line-height', // The unique ID of this setting.
	    array(
	        'default' => '1.2',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'content-line-height', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Line Height', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '9',
	    )
	);

    // add a setting, Select lists
	$wp_customize->add_setting(
	    'content-headings',
	    array(
	        'default' => 'Arial, Helvetica, sans-serif',
	    )
	);
	// add the control 
	$wp_customize->add_control(
	    'content-headings',
	    array(
	        'type' => 'select',
	        'label' => __('Headings Fonts', 'saulsme' ),
	        'section' => 'section_fonts',
	        'priority' => '10',
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
	    'heading-one-size', // The unique ID of this setting.
	    array(
	        'default' => '38.5',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'heading-one-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('H1 Font Size', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '20',
	    )
	);	
    // Add a setting, text
    $wp_customize->add_setting(
	    'heading-two-size', // The unique ID of this setting.
	    array(
	        'default' => '31.5',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'heading-two-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('H2 Font Size', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '30',
	    )
	);	
    // Add a setting, text
    $wp_customize->add_setting(
	    'heading-three-size', // The unique ID of this setting.
	    array(
	        'default' => '24.5',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'heading-three-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('H3 Font Size', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '40',
	    )
	);	
    // Add a setting, text
    $wp_customize->add_setting(
	    'heading-four-size', // The unique ID of this setting.
	    array(
	        'default' => '17.5',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'heading-four-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('H4 Font Size', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '50',
	    )
	);	
    // Add a setting, text
    $wp_customize->add_setting(
	    'heading-five-size', // The unique ID of this setting.
	    array(
	        'default' => '14',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'heading-five-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('H5 Font Size', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '60',
	    )
	);	
    // Add a setting, text
    $wp_customize->add_setting(
	    'heading-six-size', // The unique ID of this setting.
	    array(
	        'default' => '11.9',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'heading-six-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('H6 Font Size', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '70',
	    )
	);	


	// add a setting, Select lists
	$wp_customize->add_setting(
	    'content-paragraph',
	    array(
	        'default' => 'Arial, Helvetica, sans-serif',
	    )
	);
	// add the control 
	$wp_customize->add_control(
	    'content-paragraph',
	    array(
	        'type' => 'select',
	        'label' => __('Content Fonts', 'saulsme' ),
	        'section' => 'section_fonts',
	        'priority' => '80',
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
	    'content-font-size', // The unique ID of this setting.
	    array(
	        'default' => '14',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    'content-font-size', // ID of the control. This should match the ID of the setting that the control belongs to
	    array(
	        'label' => __('Content Font Size', 'saulsme' ),
	        'section' => 'section_fonts',
	        'type' => 'text',
	        'priority' => '90',
	    )
	);	


?>