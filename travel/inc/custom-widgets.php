<?php

// Halim Custom Widgets

function halim_widgets(){

    // Sidebar
    register_sidebar(array(
        'name' => __('Main Sidebar','halim'),
        'id' => 'main_sidebar',
        'description' => __('Main Sidebar for Blog Page', 'halim'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 1
    register_sidebar(array(
        'name' => __('Footer Sidebar 1','halim'),
        'id' => 'footer_sidebar1',
        'description' => __('Footer Widget 1 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Footer Sidebar 2
    register_sidebar(array(
        'name' => __('Footer Sidebar 2','halim'),
        'id' => 'footer_sidebar2',
        'description' => __('Footer Widget 2 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 3
    register_sidebar(array(
        'name' => __('Footer Sidebar 3','halim'),
        'id' => 'footer_sidebar3',
        'description' => __('Footer Widget 3 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 4
    register_sidebar(array(
        'name' => __('Footer Sidebar 4','halim'),
        'id' => 'footer_sidebar4',
        'description' => __('Footer Widget 4 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer contact-box">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer copyright
    register_sidebar(array(
        'name' => __('Footer Copyright','halim'),
        'id' => 'copyright',
        'description' => __('Footer Widget copyright for Showing Widget', 'halim'),
        
    ));

    // Footer social
    register_sidebar(array(
        'name' => __('Footer Social','halim'),
        'id' => 'social',
        'description' => __('Footer Widget social for Showing Widget', 'halim'),

    ));
}
add_action('widgets_init', 'halim_widgets');