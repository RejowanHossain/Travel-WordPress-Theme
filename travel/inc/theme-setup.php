<?php

function travel_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array( 'post', 'sliders' , 'tours', 'destinations' , 'portfolio' ) );
    load_theme_textdomain('travel', get_template_directory_uri().'/languages');
    add_theme_support( 'custom-logo' );

    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'travel')
    ));
}
add_action('after_setup_theme', 'travel_setup_theme');