<?php
/*

Plugin Name: travel Custom Post Type
Description: Custom post type for travel theme
Text Domain: travel

*/


function travel_custom_posts(){

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name'              => __('Sliders', 'travel'),
            'singular_name'     => __('Slider', 'travel'),
            'add_new'           => __( 'Add New Slider', 'travel' ),
            'add_new_item'      => __( 'Add New Slider', 'travel' ),
            'featured_image'    => _x( 'Slider Image', 'travel' ),
            'edit_item'         => __( 'Edit Slider', 'travel' ),
            'search_items'      => __( 'Search Slider', 'travel' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-images-alt',
    ));

   // tour Custom Post
    register_post_type('tours', array(
        'labels' => array(
            'name' => __('Tours', 'travel'),
            'singular_name' => __('Tour', 'travel'),
            'add_new'           => __( 'Add New Tour', 'travel' ),
            'add_new_item'      => __( 'Add New Tour', 'travel' ),
            'featured_image'    => _x( 'Tour Image', 'travel' ),
            'edit_item'         => __( 'Edit Tour', 'travel' ),
            'search_items'      => __( 'Search Tour', 'travel' ),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons- networking',
    ));

    // counter Custom Post
    register_post_type('counters', array(
        'labels' => array(
            'name'              => __('Counters', 'travel'),
            'singular_name'     => __('Counter', 'travel'),
            'add_new'           => __( 'Add New Counter', 'travel' ),
            'add_new_item'      => __( 'Add New Counter', 'travel' ),
            'edit_item'         => __( 'Edit Counter', 'travel' ),
            'search_items'      => __( 'Search Counter', 'travel' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
         'menu_icon' => 'dashicons-store',
    ));

    // destinations Custom Post
    register_post_type('destinations', array(
        'labels' => array(
            'name' => __('Destination', 'travel'),
            'singular_name' => __('Destination', 'travel'),
            'add_new'           => __( 'Add New Destination', 'travel' ),
            'add_new_item'      => __( 'Add New Destination', 'travel' ),
            'featured_image'    => _x( 'Destination Image', 'travel' ),
            'edit_item'         => __( 'Edit Destination', 'travel' ),
            'search_items'      => __( 'Search Destination', 'travel' ),
        ),
        'public' => true,
        'supports' => array( 'thumbnail', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons-format-quote',
    ));

    // Gallery Custom Post
    // register_post_type('gallery', array(
    //     'labels' => array(
    //         'name' => __('Galleries', 'travel'),
    //         'singular_name' => __('Gallery', 'travel'),
    //         'add_new'           => __( 'Add New Gallery', 'travel' ),
    //         'add_new_item'      => __( 'Add New Gallery', 'travel' ),
    //         'featured_image'    => _x( 'Gallery Image', 'travel' ),
    //         'edit_item'         => __( 'Edit Gallery', 'travel' ),
    //         'search_items'      => __( 'Search Gallery', 'travel' ),
    //     ),
    //     'public' => true,
    //     'supports' => array('title', 'custom-field', 'page-attributes'),
    //     'menu_icon' => 'dashicons-camera-alt',
    // ));

    // Portfolio Custom Post
    // register_post_type('portfolio', array(
    //     'labels' => array(
    //         'name' => __('Portfolios', 'travel'),
    //         'singular_name' => __('Portfolio', 'travel'),
    //         'add_new'           => __( 'Add New Portfolio', 'travel' ),
    //         'add_new_item'      => __( 'Add New Portfolio', 'travel' ),
    //         'featured_image'    => _x( 'Portfolio Image', 'travel' ),
    //         'edit_item'         => __( 'Edit Portfolio', 'travel' ),
    //         'search_items'      => __( 'Search Portfolio', 'travel' ),
    //     ),
    //     'public' => true,
    //     'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes'),
    //      'menu_icon' => 'dashicons-portfolio',
    // ));

    // Portfolio Taxonomy

    // register_taxonomy('portfolio-cat', 'portfolio',array(
    //     'labels' => array(
    //         'name' => __('Categories', 'travel'),
    //         'singular_name' => __('Category', 'travel'),
    //     ),
    //     'hierarchical' => true,
    //     'show_admin_column' => true
    // ));

}
add_action('init', 'travel_custom_posts');