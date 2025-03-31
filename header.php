<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="cursor">
    <div class="cursor__ball cursor__ball--big">
        <svg height="30" width="30">
        <circle cx="15" cy="15" r="12" stroke-width="0"></circle>
        </svg>
    </div>
    <div class="cursor__ball cursor__ball--small">
        <svg height="10" width="10">
        <circle cx="5" cy="5" r="4" stroke-width="0"></circle>
        </svg>
    </div>
</div>
<header class="position-fixed top-0 w-100 z-1">
        <div class="container">
            <div class="row py-5">
                <div class="nav-logo col-6">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
                </div>
                <div class="nav-btn col-6">
                    <button class="custom-btn contact">Contact Us
                        <span class="circle custom-circle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.07606 20.8029C0.490272 21.3887 0.490272 22.3384 1.07606 22.9242C1.66185 23.51 2.61159 23.51 3.19738 22.9242L1.07606 20.8029ZM23.5643 1.93597C23.5643 1.10755 22.8927 0.435974 22.0643 0.435974L8.56427 0.435974C7.73584 0.435974 7.06427 1.10755 7.06427 1.93597C7.06427 2.7644 7.73584 3.43597 8.56427 3.43597H20.5643V15.436C20.5643 16.2644 21.2358 16.936 22.0643 16.936C22.8927 16.936 23.5643 16.2644 23.5643 15.436L23.5643 1.93597ZM3.19738 22.9242L23.1249 2.99663L21.0036 0.875314L1.07606 20.8029L3.19738 22.9242Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                    <button class="menu" id="menu">Menu
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 3.png" alt="">
                    </button>
                </div>
            </div> 
        </div>
</header>
<div class="myNav" id="myNav">
    <div class="container">
    <a href="javascript:void(0)" id="closeBtn" class="closebtn">&times;</a>
        <div class="overlay-content">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'container' => true,
                    'menu_class' => 'list-unstyled p-0',
                    'fallback_cb' => false,
                ));
            ?>
        </div>
    </div>
</div>
