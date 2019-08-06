<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left mb-3 post-preview">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="w-100 bg-light p-3">
                            <?php $tags = get_the_tags(get_the_ID()); ?>
                            <div class="pt-3 pb-3">
                                <?php foreach($tags as $tag) : ?>
                                    <a class="mr-2 mb-2 btn-square bg-secondary text-white" href="http://divineembodimenthypnotherapy.com/tags/<?php echo $tag->slug; ?>">
                                        <?php echo $tag->name; ?>
                                    </a>
                                <? endforeach; ?>
                            </div>
                            <h2 class="m-0"><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <small><?php the_time('F j, Y'); ?> | <a class="text-dark" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></small>
                            <?php the_excerpt(); ?>
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="pb-3">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" width="100%" height="auto">
                                </div>
                            <?php endif; ?>
                            <div class="w-100 text-center">
                                <a class="btn-square bg-primary text-white" href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
        </div>
        <?php get_footer(); ?>