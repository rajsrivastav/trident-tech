<footer>
    <div class="container footer-container">
        <div class="row justify-content-between pt-5">
            <div class="footer-text col-9">
                <p style="font-size: 48px;"><?php the_field('footer_heading', 'option'); ?></p>
                <p style="color: var(--color-para);"><?php the_field('footer_sub_heading', 'option'); ?></p>
            </div>
            <div class="col-3 d-flex justify-content-between">
                <div class="footer-links">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'container' => true,
                        'menu_class' => 'list-unstyled p-0',
                        'fallback_cb' => false
                    ));
                ?>
                </div>
                <div class="footer-links" style="color: var(--color-para);">
                    <p><?php the_field('socila_link_1', 'option'); ?><span><img src="<?php echo get_template_directory_uri() ?>/assets/images/Vector 1.png" alt=""></span></p>
                    <p><?php the_field('social_link_2', 'option'); ?></p>
                </div>
            </div>
        </div>
        <div class="footer-text">
            <p><?php the_field('footer_contact_heading', 'option'); ?></p>
            <p><?php the_field('footer_email', 'option'); ?></p>
        </div>
        <div class="row justify-content-between py-5">
            <div class="footer-text col-9">
                <p>Sign up for our newsletter (no spam)</p>
                <span class="input-icon position-relative">
                <input type="text" placeholder="Email" style="background: transparent; border: none; border-bottom: 1px solid white; width: 30%; color:white">
                    <svg class="position-absolute end-0 top-50" width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5" d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75L16 6.75V5.25L1 5.25V6.75Z" fill="white"/>
                    </svg>
                </span>
            </div>
            <div class="col-3 d-flex justify-content-between align-items-center">
                <div class="footer-links">
                    <p>Dubai-UAE</p>
                    <p>Punjab-India</p>
                </div>
                <div class="footer-links">
                    <p>Terms of use</p>
                    <p>©2025</p>
                </div>
            </div>
        </div>
        <div class="footer-logo">
            <?php $footer_logo = get_field('footer_logo', 'option'); ?>
            <img width="100%" src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>