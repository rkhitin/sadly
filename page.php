 <?php get_header(); ?>

    <!-- Fixed navbar -->
    <?php get_template_part('nav'); ?>

    <!-- Begin page content -->
    <div class="container body-container">
        <div class="col-md-9">
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'single'); ?>
            <?php endwhile; ?>
        </div> 

        <?php get_sidebar(); ?>
    </div>  <!-- container -->

<?php get_footer(); ?>
