<?php 
    get_header();
?>
<div class="loadingScreen">
    <h2 style="color: var(--color-para);">Loading...</h2>
    <div id="myBar"></div>
</div>
<section class="blogs">
<div class="container">
    <?php
        // Custom Query for Trident Posts CPT
        $args = array(
            'post_type'      => 'trident-posts', // Custom Post Type Slug
            'posts_per_page' => 6,  // Number of posts to display
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        $query = new WP_Query($args);
    ?>
    <div class="row">
        <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-6 p-5">
                    <div class="trident-post">
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="rounded-3 object-fit-cover" width="50%" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>Published on: <?php echo get_the_date(); ?></p>
                        <p><?php the_excerpt(); ?></p>
                        
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
                <?php endwhile; 
                wp_reset_postdata(); // Reset Query
            else : 
                echo "<p>No Trident Posts Found.</p>";
            endif; 
        ?>
    </div>
</div>
</section>


<?php 
    get_footer();
?>