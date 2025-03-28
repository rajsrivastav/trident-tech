<?php 
    get_header();
?>
<div class="loadingScreen">
    <h2 style="color: var(--color-para);">Loading...</h2>
    <div id="myBar"></div>
</div>
<section class="blogs text-dark">
    <div class="container">
        <div class="row bg-light rounded-3 p-5">
            <?php 
                if (have_posts()) : 
                    while (have_posts()) : the_post(); ?>
                     <div class="col">
                        <h1><?php the_title(); ?></h1>  <!-- Post Title -->
                        
                        <p>Published on: <?php echo get_the_date(); ?> by <?php the_author(); ?></p> <!-- Date & Author -->
                        
                        <div><?php the_content(); ?></div>  <!-- Post Content -->
                        
                        <p>Category: <?php the_category(', '); ?></p>  <!-- Post Categories -->
                        <p>Tags: <?php the_tags('', ', ', ''); ?></p>  <!-- Post Tags -->
                    </div>
                    <?php endwhile;
                endif; 
                ?>
        </div>
    </div>
</section>


<?php 
    get_footer();
?>