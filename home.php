<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="w-100 bg-light">
                            <h2><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <small><?php the_time('F j, Y'); ?> | <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php get_author(); ?></a></small>
                            <?php the_excerpt(); ?>
                            <?php if(has_post_thumbnail()) : ?>
                                <div>
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="bg-white">
                    <p>Sidebar</p>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>