<!--==================== FOOTER ====================-->
<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content grid">
            <div class="footer__data">
                <?php 
                    if( is_active_sidebar( 'footer_sidebar1' ) ){
                        dynamic_sidebar( 'footer_sidebar1' );
                    }
                ?>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">About</h3>
                <?php 
                    if( is_active_sidebar( 'footer_sidebar2' ) ){
                        dynamic_sidebar( 'footer_sidebar2' );
                    }
                ?>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">Company</h3>
                <?php 
                    if( is_active_sidebar( 'footer_sidebar3' ) ){
                        dynamic_sidebar( 'footer_sidebar3' );
                    }
                ?>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">Support</h3>
                <?php 
                    if( is_active_sidebar( 'footer_sidebar4' ) ){
                        dynamic_sidebar( 'footer_sidebar4' );
                    }
                ?>
            </div>
        </div>

        <div class="footer__rights">
            <?php 
                $config = get_option( 'travel_options' );
            ?>
            <p class="footer__copy">
                <?php echo esc_html( $config[ 'footer_text' ] );?>
            </p>
            <!-- <div class="footer__terms">
                <a href="<?php echo esc_url( $config[ 'footer_link_url' ] );?>">
                    <?php echo esc_html( $config[ 'footer_link_text' ] );?>
                </a>
                <a href="<?php echo esc_url( $config[ 'footer_link_url' ] );?>">
                    <?php echo esc_html( $config[ 'footer_link_text' ] );?>
                </a>
            </div> -->

        </div>
    </div>
</footer>

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line scrollup__icon"></i>
</a>

<?php wp_footer();?>
</body>

</html>