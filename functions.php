<?php

function registerMyMenu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'registerMyMenu');

function sadly_widgets_init() {
    register_sidebar([
        'name' => 'Base sidebar',
        'id' => 'sidebar-1',
 		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'sadly_widgets_init');

 // pagination
function oriolo_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }
     if(1 != $pages)
     { 
         echo "<ul class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'><i class='fa fa-arrow-left'></i></a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'><i class='fa fa-chevron-left'></i></a></li>";
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class='active'><a href=''>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
             }
         }
         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'><i class='fa fa-chevron-right'></i></a></li>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'><i class='fa fa-arrow-right'></i></a></li>";
         echo "</ul>\n";
     }
}
