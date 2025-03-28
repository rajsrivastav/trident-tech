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
                <input class="rounded" type="text" placeholder="email" style="background: transparent;">
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
            <img width="100%" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>