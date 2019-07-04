<?php /* Template Name: Contact */ get_header(); ?>
<div class="container">
    <?php while(have_posts()) : the_post() ?>
        <div class="row d-flex">
            <?php if(has_post_thumbnail()) : ?>
                <div class="text col-md-8">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <div class="text col-md-4">
                    <img class="mx-auto" src="<?php the_post_thumbnail_url(); ?>" width="97%" height="100%" >
                </div>
            <?php else : ?>
                <div class="text col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    <hr>
    <div class="row">
        <div class="container text-left bg-transparent border-0">
            <form action="<?php echo esc_url(admin_url("admin-post.php")); ?>" method="POST">
                <input type="hidden" name="action" value="contact">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name here...">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email here...">
                </div>
                <div class="form-group">
                    <label for="name">Phone:</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number here...">
                </div>
                <div class="form-group">
                    <label for="name">Message:</label>
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter your message here..."></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
    <?php get_footer(); ?>