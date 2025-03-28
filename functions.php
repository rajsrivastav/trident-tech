<?php
function mytheme_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    // Theme Main CSS
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('contact-form', get_template_directory_uri() . '/assets/css/contact-page.css');


    // Bootstrap JS (with Popper.js)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
   
    // Link Custom CSS
    wp_enqueue_style('custom-font', get_template_directory_uri() . '/assets/font/alovera/fonts.css');
    
    //google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Darker+Grotesque:wght@300..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', false);

    //swiper css
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    //jquery cdn
    wp_enqueue_script('jquery-cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null, true);
    
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

function mytheme_register_menus() {
    register_nav_menus(array(
        'footer_menu' => __('Footer Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js', array('jquery'), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/scripts/app.js', array('gsap-js'), false, true );
    
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

//acf custom thumbnail 
function set_acf_image_as_post_thumbnail($post_id) {
    if (get_post_type($post_id) == 'trident-posts') { // Change CPT slug if different
        $acf_image = get_field('post_thumbnail', $post_id);

        if ($acf_image) {
            update_post_meta($post_id, '_thumbnail_id', $acf_image['ID']); // Set ACF Image as Featured Image
        }
    }
}
add_action('save_post', 'set_acf_image_as_post_thumbnail');