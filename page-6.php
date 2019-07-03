<?php get_header(); ?>
    <div class="container">
        <div class="row d-flex" style="min-height:1000px;">
            <?php while(have_posts()) : the_post() ?>
                <div class="text col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <?php get_footer(); ?>