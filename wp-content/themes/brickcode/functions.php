<?php

if ( function_exists('register_sidebars') ){
    register_sidebars();

    add_theme_support( 'post-thumbnails' );
}

add_image_size( 'slider-propiedad', 368, 269, false );
add_image_size( 'full-propiedad', 1281, 875, false );
<<<<<<< HEAD
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
=======
>>>>>>> 308c7845aa91da27fe7eac97852d9aef233a9310
