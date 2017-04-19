<?php
/*
Template Name: Archive
*/
get_header(); ?>
 <?php get_template_part( 'menu'); ?>
    <div class="row" style="margin:0px !important;">
        <div class="col l12 m12 s12 nomargin altura-Slider">
            <ul class="bxslider" style="margin-top:-50px;">
        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
            <!--  -->

    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'slider-propiedad' );//setoma la imagen con thumbnail_id
        $url = $src[0]; ?>
                <li>
                    <img src="<?php echo $url; ?>" title="<?php echo $value->post_title ?>" width="100%"/>
                    <div class="col l12 m12 pleca-brick">
                        <div class="col l6 m12 sepa">
                            <p class="titulo-propiedad">
                                <?php echo the_title(); ?>
                            </p>
                            <p class="costo-propiedad">
                                <strong>$ <?php echo get_post_meta($value->ID, 'precio', true); ?></strong>
                                <?php  echo get_field("precio", $value->ID); ?>
                            </p>
                        </div>
                        <div class="col l6 m12 center sepa">
                            <div class="col l6 offset-l3 m12">
                                <a href="<?php echo get_permalink($value->ID); ?>"><p class="ver-mas-detalles">
                                    VER DETALLES DE PROPIEDAD
                                </p></a>
                            </div>
                            <div class="col l12 m12">
                                <p class="texto-slider-propiedades01 title-slider-propiedades01">
                                    <ul class="lista-slider-3 center">
                                        <li>
                                            <span class="espacio-slider"><?php echo get_field("superficie", $value->ID); ?> m<sup>2</sup></span>
                                            <img src="<?php bloginfo("template_url");?>/images/icon/casa.png" alt="Hogar">
                                        </li>
                                        <li>
                                            <span class="espacio-slider"><?php echo get_field("banios", $value->ID); ?></span>
                                            <img src="<?php bloginfo("template_url");?>/images/icon/tina.png" alt="Baño"></li>
                                        <li>
                                            <span class="espacio-slider"><?php echo get_field("recamaras", $value->ID); ?></span>
                                            <img src="<?php bloginfo("template_url");?>/images/icon/cama.png" alt="Recamara">
                                        </li>
                                        <li><span class="espacio-slider"><?php echo get_field("estacionamiento", $value->ID); ?></span>
                                            <img src="<?php bloginfo("template_url");?>/images/icon/coche.png" alt="Estacionamiento">
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
        <!--  -->


        <?php endwhile; ?>
        </ul>
        </div>
    </div>
 <?php else: ?>
        <div class="col s12 m12 l12 center-align">
            <p>¡Ups! Lo Sentimos, No encontramos coincidencias, Intenta con otra Busqueda...</p>
            <div class="s12 m4 offset-m4 l4 offset-l4 ">
                <img src="<?php bloginfo('template_url'); ?>/images/no-found.jpg">
            </div>
        </div>
    <?php endif; ?>
    <!-- slider fin -->
<div class="row">   
    <div class="col l12 s12">
    <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
    <!--  -->
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'slider-propiedad' );
            $url = $src[0]; ?>
                <div class="col l4 m6 s12">
                    <div class="col l12 s12 border-slider nomargin">
                        <div><img  class="size-propiedades" src="<?php echo $url; ?>" alt="<?php echo $value->post_title ?>"/></div>
                        <div class="col l12 s12 detalles-brick ">
                            <div class="col l6 s12">
                                <p><strong> <?php echo the_title(); ?></strong></p>
                                <p style="color:#282828"><span><?php echo get_field("colonia", $value->ID); ?></span></p>
                            </div>
                            <div class="col l6 s12">
                                <p style="padding-top:15px;">
                                    <b>$ <?php echo get_field("precio", $value->ID); ?></b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col l12 s12">
                        <a href="<?php echo get_permalink($value->ID); ?>"><p class="detalle-propiedad2">
                            detalle de propiedad
                        </p></a>
                    </div>
                </div>
    <?php endwhile; ?>
<div class="col s12 m12 offset-m4 l4 offset-l4 pagination paginacion center-align ">
            <?php pagination('anterior', 'siguiente'); ?>
        </div>
    </div>
</div>

        
    <?php else: ?>
        <div class="col s12 m12 l12 center-align">
            <p>¡Ups! Lo Sentimos, No encontramos coincidencias, Intenta con otra Busqueda...</p>
            <div class="s12 m4 offset-m4 l4 offset-l4 ">
                <img src="<?php bloginfo('template_url'); ?>/images/no-found.jpg">
            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>