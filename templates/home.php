<?php

//   Template Name: Homepage

?>
<?php
    get_header();
?>

<?php get_template_part('template-parts/banner'); ?>

    <section class="content-section-1">
        <div class="container">
            <div class="para-heading row py-4">
                <h3 class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php the_field('section_heading'); ?>
                    <a href="<?php echo site_url('/contact-form/'); ?>" class="custom-btn">Contact Us 
                        <span class="circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.07606 20.8029C0.490272 21.3887 0.490272 22.3384 1.07606 22.9242C1.66185 23.51 2.61159 23.51 3.19738 22.9242L1.07606 20.8029ZM23.5643 1.93597C23.5643 1.10755 22.8927 0.435974 22.0643 0.435974L8.56427 0.435974C7.73584 0.435974 7.06427 1.10755 7.06427 1.93597C7.06427 2.7644 7.73584 3.43597 8.56427 3.43597H20.5643V15.436C20.5643 16.2644 21.2358 16.936 22.0643 16.936C22.8927 16.936 23.5643 16.2644 23.5643 15.436L23.5643 1.93597ZM3.19738 22.9242L23.1249 2.99663L21.0036 0.875314L1.07606 20.8029L3.19738 22.9242Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                </h3>
            </div>
            <hr class="hr-line">
            <div class="para-content row justify-content-between align-items-start">
                <div class="para-2 col-lg-6 text-white">
                    <p>Tomorrow’s brands, today.</p>
                    <p style="color: #DAA521;">معلومات عنا</p>
                </div>
                <div class="para-1 col-lg-6 text-white">
                    <p>Lorem ipsum dolor sit amet consectetur. Odio at sed magna cursus risus adipiscing augue at. Tellus mattis aliquet vel pulvinar aliquam varius laoreet nulla id.</p>
                    <p>Eget ullamcorper at est gravida praesent venenatis amet gravida sem vitae.</p>
                    <p>Sollicitudin quam mauris proin aliquam sed viverra sit sed mauris nibhvel.</p>
                    <a href="#">Learn mores <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector 3.png" alt=""></span></a>
                </div>
            </div>
        </div>
        <div class="services overflow-hidden py-5">
            <?php 
                $image1 = get_field('service_image_1');
                $image2 = get_field('service_image_2');
                $image3 = get_field('service_image_3');
            ?>
            <h2 class="service service-1"><span class="marquee"><?php the_field('service_heading_1'); ?></span> <img class="image1" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" /></h2>
            <h2 class="service service-2"><span class="marquee"><?php the_field('service_heading_2'); ?></span> <img class="image2" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" /></h2>
            <h2 class="service service-3"><span class="marquee"><?php the_field('service_heading_3'); ?></span> <img class="image3" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" /></h2>
        </div>
       
        <div class="container">
            <div class="row justify-content-evenly align-items-center py-5">
                <p class="col-lg-2 text-white">They trust us</p>
                <div class="brands col-lg-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trused-partners/Group 52.png" alt="brands">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trused-partners/Mask group (1).png" alt="brands">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trused-partners/Mask group (2).png" alt="brands">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trused-partners/Mask group.png" alt="brands">
                </div>
            </div>
        </div>
    </section>
    <section class="rating-section">
        <div class="container">
            <div class="row py-5">
                <div class="rating col-lg-3">
                    <h2>10 <span>+</span></h2>
                    <span class="rating-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 32.png" alt="group"><p class="m-0">Awards with Partners</p></span>
                </div>
                <div class="rating col-lg-3">
                    <h2>5.0</h2>
                    <span class="rating-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 321.png" alt="group"><p class="m-0">rating</p></span>
                </div>
                <div class="rating col-lg-3">
                    <h2>12 <span>+</span></h2>
                    <span class="rating-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 321.png" alt="group"><p class="m-0">Years of Experience</p></span>
                </div>
                <div class="rating col-lg-3">
                    <h2>100 <span>%</span></h2>
                    <span class="rating-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 321 (1).png" alt="group"><p class="m-0">Our Job Success</p></span>
                </div>
            </div>
        </div>
    </section>
    <section class="skills-experienced">
        <div class="container">
            <div class="skills row text-white">
                <h3 class="col-lg-12">Boost your Company Profile & Revenue to new heights <br>via our highly skilled & 
                    <button class="custom-btn experience-btn">Experienced Team 
                    <span class="circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.07606 20.8029C0.490272 21.3887 0.490272 22.3384 1.07606 22.9242C1.66185 23.51 2.61159 23.51 3.19738 22.9242L1.07606 20.8029ZM23.5643 1.93597C23.5643 1.10755 22.8927 0.435974 22.0643 0.435974L8.56427 0.435974C7.73584 0.435974 7.06427 1.10755 7.06427 1.93597C7.06427 2.7644 7.73584 3.43597 8.56427 3.43597H20.5643V15.436C20.5643 16.2644 21.2358 16.936 22.0643 16.936C22.8927 16.936 23.5643 16.2644 23.5643 15.436L23.5643 1.93597ZM3.19738 22.9242L23.1249 2.99663L21.0036 0.875314L1.07606 20.8029L3.19738 22.9242Z" fill="currentColor"></path>
                    </svg>
                    </span>
                    </button>
                </h3>
                <div class="skill-content d-flex col-lg-12 gap-5 pt-4">
                    <p>Lorem ipsum dolor sit amet consectetur. Odio aenean id pharetra convallis egestas orci sapien a. Sociis vulputate quam lacus at blandit enim a cras lorem. Ut pharetra gravida sed vitae commodo enim ut purus amet. Consectetur aliquet ut cursus sed pulvinar. Euismod sapien fringilla orci neque lorem lacus aliquam. Tristique dictum velit mi sit sit. Est cursus diam nec lectus. Dui massa at eget ut volutpat. Non habitant.</p>
                    <div class="skill-video">
                        <video loop autoplay muted src="<?php echo get_template_directory_uri(); ?>/assets/videos/skill-video.mp4" width="100%" height="435px"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="huggl-section">
        <div class="container">
            <div class="huggl-contents text-center py-5">
                <h2 class="hover-h2">Huggl</h2>
                <h2 class="hover-h2">Charmant</h2>
                <h2 class="hover-h2">Predict</h2>
                <h2 class="hover-h2">Pepper</h2>
                <h2 class="hover-h2">more...</h2>
                <img class="huggl-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 13.png" alt="">
            </div>
        </div>
    </section>
    <section class="achivements py-5">
        <div class="container">
            <div class="row justify-content-between my-5">
                <div class="position-relative col-4 d-flex align-items-end justify-content-center">
                    <img class="animate-img" id="animate-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 329.png" alt="">
                    <div class="overlay">
                        <span class="overlay-circle">Hire<br>Us</span>
                    </div>
                </div>
                <div class="heading col-8 text-white d-flex flex-column align-items-end justify-content-center text-end">
                    <p style="color: #DAA521;">معلومات عنا</p>
                    <h3>Great achievements by great people</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. A dictumst hendrerit tellus et aliquet lectus. Dolor ac ante sociis ut hac malesuada neque. Nunc vel  posuere vel fringilla in sollicitudin sem. Volutpat pellentesque eu pellentesque ut massa orci tristique</p>
                    <p>Lorem ipsum dolor sit amet consectetur. Interdum sed ultrices luctus duis vitae pharetra viverra elementum. Donec dictumst urna eleifend faucibus eu euismod felis nibh. Maecenas sit dictums.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="logo-section py-5">
        <div class="container">
            <div class="logos d-flex justify-content-between">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/certificate-csslight_page-0001-1200x1696-copy.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/innovationm.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/Subtract.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/SOTD-Best-css.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/uii.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ux-v.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/website.png" alt="">
            </div>
        </div>
    </section>
    <section class="getaquote ">
            <div class="getaquote-heading text-center">
                <h2>
                    <span><span class="letter">g</span></span>
                    <span><span class="letter">e</span></span>
                    <span><span class="letter">t</span></span>
                    <span><span class="letter">a</span></span>
                    <span><span class="letter">q</span></span>
                    <span><span class="letter">u</span></span>
                    <span><span class="letter">o</span></span>
                    <span><span class="letter">t</span></span>
                    <span><span class="letter">e</span></span>
                    <img class="img-animate" src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 330.png" alt="">
                </h2>
            </div>
            <div class="getaquote-form">
                <div class="form-head px-5 py-5">
                    <div class="heading">
                        <h2>Please fill out <br> the form below.</h2>
                        <p>The sooner you start, the sooner you’ll have it ready.</p>
                    </div>
                    <div class="Close">
                        <span class="closeBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="32.162" height="1.6081" rx="0.804051" transform="matrix(0.708648 0.705562 -0.708648 0.705562 1.20703 0)" fill="black"/>
                            <rect width="32.162" height="1.6081" rx="0.804051" transform="matrix(0.708648 -0.705562 0.708648 0.705562 0 22.8654)" fill="black"/>
                        </svg>
                        </span>
                    </div>
                </div>
                <div class="form-body px-5 d-flex flex-column gap-3 pb-5">
                    <?php echo do_shortcode('[contact-form-7 id="9c685e8" title="Contact form 1"]') ?>
                </div>
            </div>
    </section>
<?php
    get_footer();
?>