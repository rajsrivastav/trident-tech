
<section class="banner">
        <div class="container">
            <div class="row align-items-end justify-content-between pb-5">
                <div class="banner-text col-lg-6  gap-4">
                    <p><?php the_field('banner_text1'); ?></p>
                    <p><?php the_field('banner_text2'); ?></p>
                    <p><?php the_field('banner_text3'); ?></p>
                </div>
                <div class="banner-video col-lg-6">
                    <?php $banner_video = get_field('banner-video') ?>
                    <video class="b-video" loop autoplay muted src="<?php echo esc_url(get_template_directory_uri() . $banner_video ); ?>/assets/videos/banner-video.mp4"></video>
                </div>
            </div>
            <div class="banner-row-2 pb-3">
                <h1> 
                    <span class="one"><?php the_field('heading'); ?></span>
                <span class="swiper swiper-container d-inline-flex">
                    <span class="swiper-wrapper">
                        <span class="swiper-slide"><?php the_field('Growth'); ?></span>
                        <span class="swiper-slide"><?php the_field('Boost'); ?></span>
                        <span class="swiper-slide"><?php the_field('Success'); ?></span>
                        <span class="swiper-slide"><?php the_field('Reach'); ?></span>
                    </span>
                </span>
                </h1>
            </div>
        </div>
</section>