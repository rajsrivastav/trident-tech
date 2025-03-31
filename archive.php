<?php get_header(); ?>

<section class="archive-posts">
  
    <?php if (have_posts()) : ?>
        <div class="container  blogs text-white px-5">       
        <h1 class="archive-title">
            <?php the_archive_title(); ?>
        </h1>
            <?php while (have_posts()) : the_post(); ?>
                <article class="archive-post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta"><?php the_date(); ?> | <?php the_author(); ?></div>
                    <div class="post-excerpt"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
