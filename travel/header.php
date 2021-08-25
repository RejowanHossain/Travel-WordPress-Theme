<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  
        $config = get_option( 'travel_options' );

        $favicon =  $config['favicon']
    ?>
    <link rel="shortcut icon" href="<?php echo esc_url($favicon[ 'url' ]);?>" type="image/png">

    <?php wp_head();?>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <?php
                $logo = $config['header_logo'];

                if( $logo ){
            ?>
            <a href="<?php echo esc_url(site_url());?>">
                <img src="<?php echo esc_url($logo['url']);?>" alt="logo">
            </a>

            <?php } else{?>
            <a href="#" class="nav__logo">Travel</a>
            <?php  } ?>

            <div class="nav__menu" id="nav-menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'nav__list',
                        'add_li_class'  => 'nav__item',
                        'add_a_class'     => 'nav__item',
                    ));
                ?>

                <div class="nav__dark">
                    <!-- Theme change button -->
                    <span class="change-theme-name"><?php _e('Dark Mode');?></span>
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>

                <i class="ri-close-line nav__close" id="nav-close"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>