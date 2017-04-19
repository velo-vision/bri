<?php

if ( function_exists('register_sidebars') ){
    register_sidebars();

    add_theme_support( 'post-thumbnails' );
}

function wpdocs_custom_excerpt_length( $length ) {
   return 150;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_image_size( 'slider-propiedad', 368, 269, false );
add_image_size( 'full-propiedad', 1281, 875, false );

?>

<?php
function pagination($prev = '', $next = '') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo paginate_links( $pagination );
};
 ?>

<?php
// function kriesi_pagination($pages = '', $range = 3)
// {
//      $showitems = ($range * 2)+1;

//      global $paged;
//      if(empty($paged)) $paged = 1;

//      if($pages == '')
//      {
//          global $wp_query;
//          $pages = $wp_query->max_num_pages;
//          if(!$pages)
//          {
//              $pages = 1;
//          }
//      }

//      if(1 != $pages)
//      {
//          echo "<div class='pagination'>";
//          if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
//          if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

//          for ($i=1; $i <= $pages; $i++)
//          {
//              if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
//              {
//                  echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
//              }
//          }

//          if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
//          if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
//          echo "</div>\n";
//      }
// }
 ?>
