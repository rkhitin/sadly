 <article class='<?php post_class(); ?>' id='post-<?php the_ID();?>'>
    <a href="<?php the_permalink(); ?>">
        <h2>
            <?php the_title(); ?>
        </h2>
    </a>
    <?php get_template_part('post-info'); ?>
    
    <?php the_content(); ?>

</article>
