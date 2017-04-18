<?php

if ( function_exists('register_sidebars') ){
    register_sidebars();

    add_theme_support( 'post-thumbnails' );
}

function wpdocs_custom_excerpt_length( $length ) {
   return 200;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_image_size( 'slider-propiedad', 368, 269, false );
add_image_size( 'full-propiedad', 1281, 875, false );
