<?php get_header(); ?>
    <div class="container">
        <div class="row d-flex" style="min-height:1000px;">
            <div class="text col-md-12">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php the_header(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php echo 'No posts found'; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php get_footer(); ?>