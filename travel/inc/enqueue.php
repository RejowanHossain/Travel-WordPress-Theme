<?php

function travel_css_js_enqueue(){

    // CSS Load
    wp_enqueue_style('remix-icon', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css', array(), time(), 'all' );
    wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/styles.css', array(), time(), 'all' );
    wp_enqueue_style( 'fa5', '//use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/all.min.css', array(), time(), 'all' );
    wp_enqueue_style('fontsawe', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), time(), 'all' );

    wp_enqueue_style('style-css', get_stylesheet_uri());

    // JS Load
    wp_enqueue_script('scroll-js', get_template_directory_uri().'/assets/js/scrollreveal.min.js', array('jquery'), time(), true);
    wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array('jquery'), time(), true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri().'/assets/js/all.min.js', array('jquery'), time(), true);

}
add_action('wp_enqueue_scripts','travel_css_js_enqueue');