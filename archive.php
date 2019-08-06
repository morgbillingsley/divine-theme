<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left mb-3 post-preview">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="w-100 bg-light p-3">
                            <?php $tags = get_the_tags(get_the_ID()); ?>
                            <div class="pt-3 pb-3">
                                <?php if(count($tags) > 0) : ?>
                                    <?php foreach($tags as $tag) : ?>
                                        <a class="mr-2 mb-2 btn-square bg-secondary text-white" href="http://divineembodimenthypnotherapy.com/tags/<?php echo $tag->slug; ?>">
                                            <?php echo $tag->name; ?>
                                        </a>
                                    <? endforeach; ?>
                                <?php endif; ?>
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
            <div class="col-md-4 text-left">
                <div class="bg-light p-2 mb-3">
                    <?php
                        $args = array(
                            'numberposts' => 5,
                            'offset' => 0,
                            'category' => 0,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'include' => '',
                            'exclude' => '',
                            'meta_key' => '',
                            'meta_value' =>'',
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'suppress_filters' => true
                        );
                        $recent = wp_get_recent_posts($args, ARRAY_A);
                    ?>
                    <h4 class="m-0 mb-2 border-bottom border-dark">Featured Posts</h4>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach($recent as $post) : ?>
                                <div class="carousel-item active">
                                    <a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>">
                                        <img class="d-block w-100" src="<?php the_post_thumbnail_url('medium'); ?>" alt="First slide">
                                        <div class="d-none d-md-block">
                                            <h5 class="m-0"><?php the_title(); ?></h5>
                                            <small><?php the_time('F j, Y'); ?> | <a class="text-dark" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></small>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-2 mb-3">
                    <?php
                        $args = array(
                            'child_of'            => 0,
                            'current_category'    => 0,
                            'depth'               => 0,
                            'echo'                => 1,
                            'exclude'             => '',
                            'exclude_tree'        => '',
                            'feed'                => '',
                            'feed_image'          => '',
                            'feed_type'           => '',
                            'hide_empty'          => 1,
                            'hide_title_if_empty' => false,
                            'hierarchical'        => true,
                            'order'               => 'ASC',
                            'orderby'             => 'name',
                            'separator'           => '<br />',
                            'show_count'          => 0,
                            'show_option_all'     => '',
                            'show_option_none'    => __( 'No categories' ),
                            'style'               => 'list',
                            'taxonomy'            => 'category',
                            'title_li'            => '',
                            'use_desc_for_title'  => 1,
                        );
                    ?>
                    <h4 class="m-0 mb-2 border-bottom border-dark">Topics</h4>
                    <?php wp_list_categories($args); ?>
                </div>
                <div class="bg-light p-2 mb-3">
                    <h4 class="m-0 mb-2 border-bottom border-dark">Contact</h4>
                    <p class="mt-2 mb-2" style="font-size:16px;">Click the button below to send me a personal message or schedule an appointment!</p>
                    <div class="text-center p-2">
                        <a class="btn-square bg-primary text-white" href="<?php echo get_permalink(by_path('contact/')); ?>">Message me!</a>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>