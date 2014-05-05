<?php get_header(); ?>

<!-- Fixed navbar -->
<?php get_template_part('nav'); ?>

<div class="container">
    <div class="col-md-12">
        <h1>
            Записи 
            <?php
                if (is_category()):
                    echo 'в рубрике "';
                    single_cat_title();
                    echo '"';
                elseif ( is_tag() ) :
                    echo 'с тегом "';
                    single_tag_title();
                    echo '"';
                elseif (is_year()):
                    printf(__('за год: %s', 'striped'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'striped')) . '</span>');
                elseif (is_month()):
                    printf(__('за месяц: %s', 'striped'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'striped')) . '</span>');
                elseif (is_day()):
                    printf(__('за день: %s', 'striped'), '<span>' . get_the_date() . '</span>');
                endif;
            ?>
        </h1>
    </div>

</div>
    <hr>

<!-- Begin page content -->
<?php get_template_part('index-container'); ?>

<?php get_footer(); ?>
