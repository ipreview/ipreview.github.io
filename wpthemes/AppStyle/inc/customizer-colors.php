<?php
	
	/*
	 ***********************
	 *=colors
	 ***********************
	 */
	// add a setting, Color picker, H1~H6
	$wp_customize->add_setting(
	    'headers-color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'headers-color',
	        array(
	            'label' => __('H1~H6 Color', 'saulsme' ),
	            'section' => 'colors',
	            'settings' => 'headers-color',
	        )
	    )
	);

	// add a setting, Color picker, Content
	$wp_customize->add_setting(
	    'content-color',
	    array(
	        'default' => '#999999',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'content-color',
	        array(
	            'label' => __('Content Color', 'saulsme' ),
	            'section' => 'colors',
	            'settings' => 'content-color',
	        )
	    )
	);

	// add a setting, Color picker, Link
	$wp_customize->add_setting(
	    'link-color',
	    array(
	        'default' => '#0088cc',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link-color',
	        array(
	            'label' => __('Link Color', 'saulsme' ),
	            'section' => 'colors',
	            'settings' => 'link-color',
	        )
	    )
	);

	// add a setting, Color picker, Link hover
	$wp_customize->add_setting(
	    'link-hover-color',
	    array(
	        'default' => '#005580',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	// add the control
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link-hover-color',
	        array(
	            'label' => __('Link Hover Color', 'saulsme' ),
	            'section' => 'colors',
	            'settings' => 'link-hover-color',
	        )
	    )
	);	




?>