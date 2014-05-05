 <?php get_header(); ?>

    <div class="home-header">
        <div class="container">
            <div class="col-md-12">
                <h1><a href='/'><?php bloginfo('name'); ?></a></h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
            </div>
        </div>
    </div>

    <!-- Fixed navbar -->
    <?php get_template_part('nav'); ?>

    <!-- Begin page content -->
    <?php get_template_part('index-container'); ?>

<?php get_footer(); ?>
