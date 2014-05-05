    <div class="container">
        <div class="col-md-9">
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content'); ?>
            <?php endwhile; ?>

            <?php
                if (function_exists('oriolo_pagination')) oriolo_pagination(); 
                else posts_nav_link();
            ?>
        </div> 

        <?php get_sidebar(); ?>
    </div>  <!-- container -->
