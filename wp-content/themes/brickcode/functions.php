<?php

if ( function_exists('register_sidebars') ){
    register_sidebars();

    add_theme_support( 'post-thumbnails' );
}

add_image_size( 'slider-propiedad', 368, 269, false );
add_image_size( 'full-propiedad', 1281, 875, false );
