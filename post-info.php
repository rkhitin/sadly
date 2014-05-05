    <div class="post-info">
        <span class="date">
            <i class="fa fa-clock-o"></i>
            <span class="month"><?php the_time('M'); ?></span>
            <span class="day"><?php the_time('j'); ?></span>
            <span class="year"><?php the_time('Y'); ?></span>
        </span>

        <?php if (has_tag()): ?>
            &nbsp;
            <span class="tags"><i class="fa fa-tags"></i> <?php the_tags('Теги: ',', '); ?></span>
        <?php endif; ?>

        <?php if (has_category()): ?>
            &nbsp;
            <span class="categories"><i class="fa fa-bookmark"></i> <?php _e( 'Категории&#58; ', 'striped' ) . the_category(', '); ?></span>
        <?php endif; ?>

        &nbsp;
        <?php edit_post_link( __( 'Edit', 'striped' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
