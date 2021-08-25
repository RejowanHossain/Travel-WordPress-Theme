<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'travel_options';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title'      => __('Travel Options' , 'travel'),
    'menu_slug'       => 'travel-options',
    'framework_title' => 'Travel Options Panel'
  ) );

  //
  // Create header section
  CSF::createSection( $prefix, array(
    'id'     => 'header_options',
    'title'  => 'Header Options',
    'icon'   => 'fas fa-address-card',
  ) );

   // logo
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header Logo' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_logo',
        'title'   => __('Upload Logo', 'travel'),
        'type'    => 'media',
      ),
      array(
        'id'      => 'favicon',
        'title'   => __('Upload Favicon', 'travel'),
        'type'    => 'media',
      ),
    ),

  ) );



  //header right

  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Social Icons' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'social_icons',
        'title'   => 'Social Icons',
        'type'    => 'group',
        'button_title' => 'Add New Icons',
        'fields'  => array(
          array(
            'id'    => 'social-link',
            'type'  => 'text',
            'title' => __('Social Links', 'travel'),
          ),
          array(
            'id'    => 'social-images',
            'type'  => 'icon',
            'title' => __('Social Icons', 'travel'),
          ),
        ),
      ),
    ),

  ) );


  
    // header feature
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header featured', 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'featured_place',
        'title'   => __('Upload Image', 'travel'),
        'type'    => 'media',
      ),
      array(
        'id'      => 'featured_title',
        'title'   => __('Featured Title', 'travel'),
        'type'    => 'text',
      ),
      array(
        'id'      => 'featured_link',
        'title'   => __('Featured Link', 'travel'),
        'type'    => 'text',
      ),
    )
  ) );



    // Create about section
  CSF::createSection( $prefix, array(
    'id'     => 'about_options',
    'title'  => __('About Options', 'travel'),
    'icon'   => 'fas fa-address-card',
  ) );

  // about section title


  // about left content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About left content' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_content_title',
        'title'   => __( 'Content Title', 'travel' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_content_desc',
        'title'   => __( 'Content Description', 'travel' ),
        'type'    => 'textarea',
      ),
      array(
        'id'      => 'abt_content_btn',
        'title'   => __( 'Content Button Link', 'travel' ),
        'type'    => 'text',
      ),
      
    ),

  ) );

  // about right content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Right content' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_image_one',
        'title'   => __( 'About image One', 'travel' ),
        'type'    => 'media',
        'button_title' => __( 'Add New Image', 'travel' ),
      ),
            array(
        'id'      => 'abt_image_two',
        'title'   => __( 'About image Two', 'travel' ),
        'type'    => 'media',
        'button_title' => __( 'Add New Image', 'travel' ),
      ),
      
    ),

  ) );



  
    // Create discover title
  CSF::createSection( $prefix, array(
    'id'     => 'places_options',
    'title'  => __('Service Options', 'travel'),
    'icon'   => 'fas fa-address-card',
  ) );

    // service discover title
  CSF::createSection( $prefix, array(
    'parent' => 'places_options',
    'title'  => __('Discover Places Title' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'discover_places_title',
        'title'   => __( 'Title', 'travel' ),
        'type'    => 'text',
      ),
      
    ),

  ) );



  // Create experience title
  CSF::createSection( $prefix, array(
    'id'     => 'experience_options',
    'title'  => __('Experience Options', 'travel'),
    'icon'   => 'fas fa-address-card',
  ) );

    // experience section title
  CSF::createSection( $prefix, array(
    'parent' => 'experience_options',
    'title'  => __('Experience Section Title' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'experience_sec_title',
        'title'   => __( 'Title', 'travel' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'counter_image_one',
        'title'   => __( 'Counter image One', 'travel' ),
        'type'    => 'media',
        'button_title' => __( 'Add New Image', 'travel' ),
      ),
            array(
        'id'      => 'counter_image_two',
        'title'   => __( 'Counter image Two', 'travel' ),
        'type'    => 'media',
        'button_title' => __( 'Add New Image', 'travel' ),
      ),
      
    ),

  ) );


    // Create video title
  CSF::createSection( $prefix, array(
    'id'     => 'Video_options',
    'title'  => __('Video Options', 'travel'),
    'icon'   => 'fas fa-address-card',
  ) );

    //  video title
  CSF::createSection( $prefix, array(
    'parent' => 'Video_options',
    'title'  => __('Video Section Title' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'video_sec_title',
        'title'   => __( 'Title', 'travel' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'video_sec_description',
        'title'   => __( 'Description', 'travel' ),
        'type'    => 'textarea',
      ),
       array(
        'id'      => 'video_sec_video',
        'title'   => __( 'Video', 'travel' ),
        'type'    => 'upload',
      ),
      
    ),

  ) );


  // Create places title
  CSF::createSection( $prefix, array(
    'id'     => 'Choose_place_options',
    'title'  => __('Place Options', 'travel'),
    'icon'   => 'fas fa-address-card',
  ) );

    //places title
  CSF::createSection( $prefix, array(
    'parent' => 'Choose_place_options',
    'title'  => __('Place Section Title' , 'travel'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'place_sec_title',
        'title'   => __( 'Title', 'travel' ),
        'type'    => 'text',
      ),
      
    ),

  ) );



  
  // CTA options
  // CSF::createSection( $prefix, array(
  //   'id' => 'cta_options',
  //   'title'  => __('CTA Options' , 'travel'),
  //   'icon'   => 'fas fa-address-card',
  //   'fields' => array(
  //       array(
  //         'id' => 'cta_switch',
  //         'type' => 'switcher',
  //         'title'   => __( 'Show CTA?', 'travel' ),
  //         'default' => true,
  //       ),
  //       array(
  //         'id'      => 'cta_title',
  //         'title'   => __( 'CTA Title', 'travel' ),
  //         'type'    => 'text',
  //         'default' => __( 'Best Solution For Your Business', 'travel' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_subtitle',
  //         'title'   => __( 'CTA Subtitle', 'travel' ),
  //         'type'    => 'textarea',
  //         'default' => __( 'The Can Be Used On Larger Scale Projectss As Well As Small Scale Projectss', 'travel' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_btn_text',
  //         'title'   => __( 'CTA Button Text', 'travel' ),
  //         'type'    => 'text',
  //         'default' => __( 'Contact', 'travel' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_btn_url',
  //         'title'   => __( 'CTA Button URL', 'travel' ),
  //         'type'    => 'text',
  //         'default' => 'https://google.com',
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //     ),

  // ) );


  // contact options
  CSF::createSection( $prefix, array(
    'id' => 'client_options',
    'title'  => __( 'Client Options' , 'travel'),
    'icon'   => 'fas fa-address-card',
    'fields' => array(
      array(
        'id'      => 'clients',
        'title'   => __( 'Client Image', 'travel' ),
        'type'    => 'group',
        'fields'  => array(
          array(
            'id'      => 'client_brands',
            'title'   => __( 'Client Image', 'travel' ),
            'type'    => 'media',
          ),
        ),
      ),
    ),

  ) );
  

  // footer options
  CSF::createSection( $prefix, array(
    'id' => 'footer_options',
    'title'  => __('Footer Options' , 'travel'),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
      array(
        'id'      => 'footer_text',
        'title'   => __( 'Copyright Text', 'travel' ),
        'type'    => 'text',
        'default' => __( '©All Rights Reserved 2020', 'travel' ),
      ),
      array(
        'id'      => 'footer_link',
        'title'   => __( 'Footer Link', 'travel' ),
        'type'    => 'group',
        'button_title'  => __( 'Add New Link', 'travel' ),
        'fields'  => array(
          array(
            'id'      => 'footer_link_text',
            'title'   => __( 'Footer Link Text', 'travel' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'footer_link_url',
            'title'   => __( 'Footer Link Url', 'travel' ),
            'type'    => 'text',
          ),
        ),
      ),
    ),

  ) );




 


  

}