<?php get_header();?>

<main class="main">
    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/home1.jpg" alt="" class="home__img">

        <div class="home__container container grid">
            <?php
                $args = array(
                    'post_type' => 'sliders',
                );
                $query = new WP_Query($args);
                while($query -> have_posts()){
                $query -> the_post();

                $btn_text = get_field('button_text');
                $btn_link = get_field('button_link');
            ?>
            <div class="home__data">
                <span class="home__data-subtitle"><?php the_title();?></span>
                <h1 class="home__data-title"><?php the_content();?></h1>
                <a href="<?php echo esc_url($btn_link);?>" class="button"><?php echo esc_html( $btn_text);?></a>
            </div>

            <?php } wp_reset_postdata();?>

            <div class="home__social">
                <?php 
                    $config = get_option( 'travel_options' );
                    $social_icons = $config[ 'social_icons' ];
                    foreach( $social_icons as $social_icon ){
                        
                ?>
                <a href="<?php echo esc_url( $social_icon['social-link'] );?>" target="_blank"
                    class="home__social-link">
                    <i class="<?php echo esc_attr( $social_icon['social-images'] );?>"></i>
                </a>

                <?php } ?>
            </div>

            <div class="home__info">
                <?php 
                    $config = get_option( 'travel_options' );

                    if( $config[ 'featured_place' ] ){
                ?>
                <div>
                    <span class="home__info-title"><?php echo esc_html( $config [ 'featured_title'] );?></span>
                    <a href="<?php echo esc_url( $config[ 'featured_link' ] );?>"
                        class="button button--flex button--link home__info-button">
                        More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="home__info-overlay">
                    <img src="<?php echo esc_url( $config [ 'featured_place']['thumbnail'] );?>" alt=""
                        class="home__info-img">
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <?php 
                $config = get_option( 'travel_options' );

            ?>
            <div class="about__data">
                <h2 class="section__title about__title"><?php echo esc_html( $config[ 'abt_content_title' ]);?></h2>
                <p class="about__description"><?php echo esc_html( $config[ 'abt_content_desc' ]);?></p>
                <a href="<?php echo esc_html( $config[ 'abt_content_btn' ]);?>" class="button">Reserve a place</a>
            </div>

            <div class="about__img">
                <div class="about__img-overlay">
                    <img src="<?php echo esc_url( $config[ 'abt_image_one' ]['url'] );?>" alt="" class="about__img-one">
                </div>

                <div class="about__img-overlay">
                    <img src="<?php echo esc_url( $config[ 'abt_image_two' ]['url'] );?>" alt="" class="about__img-two">
                </div>
            </div>

        </div>
    </section>

    <!--==================== DISCOVER ====================-->
    <section class="discover section" id="discover">
        <?php 
            $config = get_option( 'travel_options' );

            if( $config[ 'discover_places_title' ] ){
        ?>
        <h2 class="section__title"><?php echo esc_html( $config[ 'discover_places_title' ] );?></h2>
        <?php } ?>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <!--==================== DISCOVER 1 ====================-->
                <?php
                    $args = array(
                        'post_type' => 'tours',
                    );
                    $query = new WP_Query($args);
                    while($query -> have_posts()){
                    $query -> the_post();

                    $tour_info = get_field('tour_info');
                ?>
                <div class="discover__card swiper-slide">
                    <!-- <img src="<?php echo get_template_directory_uri();?>/assets/img/discover1.jpg" alt=""
                        class="discover__img"> -->
                    <?php the_post_thumbnail();?>
                    <div class="discover__data">
                        <h2 class="discover__title"><?php the_title();?></h2>
                        <span class="discover__description"><?php echo esc_html( $tour_info );?></span>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </section>

    <!--==================== EXPERIENCE ====================-->
    <section class="experience section">
        <?php 
            $config = get_option( 'travel_options' );

            if( $config[ 'experience_sec_title' ] ){
        ?>
        <h2 class="section__title"><?php echo esc_html( $config[ 'experience_sec_title' ] );?></h2>
        <?php } ?>

        <div class="experience__container container grid">
            <div class="experience__content grid">
                <?php
                    $args = array(
                        'post_type' => 'counters',
                    );
                    $query = new WP_Query($args);
                    while($query -> have_posts()){
                    $query -> the_post();

                    $tour_info = get_field('tour_info');
                ?>
                <div class="experience__data">
                    <h2 class="experience__number"><?php the_title();?></h2>
                    <span class="experience__description"><?php the_content();?></span>
                </div>

                <?php } ?>

            </div>

            <div class="experience__img grid">
                <?php 
                    $config = get_option( 'travel_options' );
                ?>
                <div class="experience__overlay">
                    <img src="<?php echo esc_url( $config[ 'counter_image_one' ]['url'] );?>" alt=""
                        class="experience__img-one">
                </div>

                <div class="experience__overlay">
                    <img src="<?php echo esc_url( $config[ 'counter_image_two' ]['url'] );?>" alt=""
                        class="experience__img-two">
                </div>

            </div>
        </div>
    </section>

    <!--==================== VIDEO ====================-->
    <section class="video section">
        <?php 
            $config = get_option( 'travel_options' );

            if( $config[ 'video_sec_video' ] ){
        ?>
        <h2 class="section__title"><?php echo esc_html( $config[ 'video_sec_title' ] );?></h2>

        <div class="video__container container">
            <p class="video__description"><?php echo esc_html( $config[ 'video_sec_description' ] );?>
            </p>

            <div class="video__content">
                <video id="video-file">
                    <source src="<?php echo esc_url( $config[ 'video_sec_video' ] );?>" type="video/mp4">
                </video>

                <button class="button button--flex video__button" id="video-button">
                    <i class="ri-play-line video__button-icon" id="video-icon"></i>
                </button>
            </div>
        </div>
        <?php } ?>
    </section>

    <!--==================== PLACES ====================-->
    <section class="place section" id="place">
        <?php 
            $config = get_option( 'travel_options' );

            if( $config[ 'place_sec_title' ] ){
        ?>
        <h2 class="section__title"><?php echo esc_html( $config[ 'place_sec_title' ] );?></h2>

        <?php } ?>

        <div class="place__container container grid">
            <!--==================== PLACES CARD 1 ====================-->
            <?php
                $args = array(
                    'post_type' => 'destinations',
                );
                $query = new WP_Query($args);
                while($query -> have_posts()){
                $query -> the_post();

                $place_name = get_field('place_name');
                $country = get_field('country');
                $price = get_field('price');
                $ratting = get_field('ratting');
            ?>
            <div class="place__card">
                <?php the_post_thumbnail( 'medium', ['class' => 'place__img'] )?>

                <div class="place__content">
                    <span class="place__rating">
                        <i class="ri-star-line place__rating-icon"></i>
                        <span class="place__rating-number"><?php echo esc_html( $ratting )?></span>
                    </span>

                    <div class="place__data">
                        <h3 class="place__title"><?php echo esc_html( $place_name )?></h3>
                        <span class="place__subtitle"><?php echo esc_html( $country )?></span>
                        <span class="place__price">$<?php echo esc_html( $price )?></span>
                    </div>
                </div>

                <a href="<?php the_permalink();?>" class="button button--flex place__button">
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>

            <?php } ?>
        </div>
    </section>

    <!--==================== SUBSCRIBE ====================-->
    <section class="subscribe section">
        <div class="subscribe__bg">
            <div class="subscribe__container container">
                <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                <p class="subscribe__description">Subscribe to our newsletter and get a
                    special 30% discount.
                </p>

                <form action="" class="subscribe__form">
                    <input type="text" placeholder="Enter email" class="subscribe__input">

                    <button class="button">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!--==================== SPONSORS ====================-->
    <section class="sponsor section">
        <div class="sponsor__container container grid">
            <?php
                $client_images = $config['clients'];
                    foreach( $client_images as $client_image){
            ?>
            <div class="sponsor__content">
                <img src="<?php echo esc_url( $client_image[ 'client_brands' ]['url'] );?>" alt="" class="sponsor__img">
            </div>

            <?php } ?>
        </div>
    </section>
</main>

<?php get_footer();?>