<?php

/*
 ***************************************************************
require_once('inc/post-types.php');

List
// Add custom post type: Slider 
// Add custom post type: Features
// Add custom post type: FAQ
 ***************************************************************
 */ 


// Add custom post type: Slider 
add_action('init', 'register_slides_posttype');
function register_slides_posttype() {
    $labels = array(
        'name'              => _x( 'Slides', 'post type general name', 'saulsme' ),
        'singular_name'     => _x( 'Slide', 'post type singular name', 'saulsme' ),
        'add_new'           => __( 'Add New Slide', 'saulsme' ),
        'add_new_item'      => __( 'Add New Slide', 'saulsme' ),
        'edit_item'         => __( 'Edit Slide', 'saulsme' ),
        'new_item'          => __( 'New Slide', 'saulsme' ),
        'all_items'         => __( 'All Slides', 'saulsme'),  
        'view_item'         => __( 'View Slide', 'saulsme' ),
        'search_items'      => __( 'Search Slides', 'saulsme' ),
        'not_found'         => __( 'No Slide found', 'saulsme' ),
        'not_found_in_trash'=> __( 'No Slide found in Trash', 'saulsme' ),
        'parent_item_colon' => '',
        'menu_name'         => __( 'Slides', 'saulsme' )
    );

    $post_type_args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_ui'           => true,
        'publicly_queryable'=> true,
        'query_var'         => true,
        'capability_type'   => 'post',
        'has_archive'       => false,
        'hierarchical'      => false,
        // 'rewrite'           => array( 'slug' => 'slides', 'with_front' => false ),
        'supports'          => array('title','thumbnail'),
        // 'menu_icon'         => get_template_directory_uri() . '/inc/slider/images/icon.png',
    );
    register_post_type('slides',$post_type_args);
}


// =Add custom post type: Features
add_action('init', 'register_features_posttype');
function register_features_posttype() {
    $labels = array(
        'name'              => _x( 'Features', 'post type general name', 'saulsme' ),
        'singular_name'     => _x( 'Feature', 'post type singular name', 'saulsme' ),
        'add_new'           => __( 'Add New Feature', 'saulsme' ),
        'add_new_item'      => __( 'Add New Feature', 'saulsme' ),
        'edit_item'         => __( 'Edit Feature', 'saulsme' ),
        'new_item'          => __( 'New Feature', 'saulsme' ),
        'all_items'         => __( 'All Features', 'saulsme'),  
        'view_item'         => __( 'View Feature', 'saulsme' ),
        'search_items'      => __( 'Search Features', 'saulsme' ),
        'not_found'         => __( 'No Feature Found', 'saulsme' ),
        'not_found_in_trash'=> __( 'No Feature found in Trash', 'saulsme' ),
        'parent_item_colon' => '',  
        'menu_name'         => __( 'Features', 'saulsme' ),
    );

    $post_type_args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_ui'           => true,
        'publicly_queryable'=> true,
        'query_var'         => true,
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'supports'          => array('title', 'editor','thumbnail'),
        // 'menu_icon'         => get_template_directory_uri() . '/inc/slider/images/icon.png',
    );
    register_post_type('features',$post_type_args);
}


//=Add custom post type: FAQ
add_action('init', 'register_faq_posttype');
function register_faq_posttype() {  
  
    $labels = array(  
        'name'              => _x('FAQ', 'post type general name', 'saulsme'),  
        'singular_name'     => _x('Question', 'post type singular name', 'saulsme'),  
        'add_new'           => _x('Add New Question', 'saulsme'),  
        'add_new_item'      => __('Add New Question', 'saulsme'),  
        'edit_item'         => __('Edit Question', 'saulsme'),  
        'new_item'          => __('New Question', 'saulsme'),  
        'all_items'         => __('All FAQ Questions', 'saulsme'),  
        'view_item'         => __('View Question', 'saulsme'),  
        'search_items'      => __('Search FAQ', 'saulsme'),  
        'not_found'         => __('No FAQ found', 'saulsme'),  
        'not_found_in_trash'=> __('No FAQ found in Trash', 'saulsme'),  
        'parent_item_colon' => '',  
        'menu_name'         => __( 'FAQ', 'saulsme' ),  
    );  
  
    $args = array(  
        'labels'            => $labels,  
        'public'            => true,  
        'publicly_queryable'=> true,  
        'show_ui'           => true,  
        'show_in_menu'      => true,  
        'query_var'         => true,  
        'rewrite'           => true,  
        'capability_type'   => 'post',  
        'has_archive'       => true,  
        'hierarchical'      => false,  
        'menu_position'     => null,  
        'supports'          => array('title', 'editor', 'page-attributes')  
    );  
    register_post_type('FAQ', $args);  
}  



