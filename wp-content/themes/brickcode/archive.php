<?php
/*
Template Name: Archive
*/
get_header(); ?>
 <?php get_template_part( 'menu'); ?>

<?php
if(is_category("4")){ ?>
<!-- propiedades -->
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
    <!-- Paginacion -->
        <div class="col s12 m12 l12 pagination paginacion center-align ">
          <div class="col l5 m5 s4">
              <p>&nbsp</p>
          </div>
          <div class="col l7 m7 s7">
            <?php pagination('<', '>'); ?>
          </div>
        </div>
      <!-- Fin Paginacion -->
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


<!-- PROPIEDADES -->



<!-- blog -->
<?php } if(is_category("1")){ ?>
<div class="row blog1">
    <span>BLOG</span>
</div>

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-11 padding-category">
      <?php
        global $post;
        $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 1);
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : setup_postdata($post); ?>

      <div class="col l10 offset-l1 m12 s12">
        <div class="col l7 m12 s12 center">
          <?php  if (has_post_thumbnail()) {
             $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
             //echo "<img src='". $url."' class='imagen-articulo-variado' />";
             echo '<li class="img-variado" style="background: url('. $url.')">';
           ?>
        </div>
        <div class="col l5">
          <div class="row">
            <div class="col l12 m12 s12 text-patrimonio">
              <p class="nomargin">
                <span><?php the_title(); ?></span>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col l12 m12 s12 text-blog1" style="padding-bottom:40px; padding:0px;">
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col l6 m6 s12 center fecha" style="padding-top:10px;">
              <p>
                <span><?php echo get_the_date('j F, Y',$posts_array[0]->ID) ?> </span>
              </p>
            </div>
            <div class="col l6 m6 s12">
              <a href="<?php echo get_permalink($posts_array[0]->ID); ?>"><p class="ver-mas-patrimonio">
                Leer más
              </p></a>
            </div>
          </div>
        </div>
        <?php  } endforeach; ?>
      </div>
    </div>
</div>
<!-- entradas -->

<div style="padding-top:80px;" class="row pading-no" >
    <div class="col l10 offset-l1 m12 s12">
        <?php
            if (have_posts()) : while (have_posts()) : the_post();
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'full' );//setoma la imagen con thumbnail_id
                $url = $src[0];
        ?>
        <div class="col l4 m6 s12 size">
            <figure class="effect-bubba">
                <a href="<?php echo get_permalink($value->ID); ?>"><img src="<?php echo $url; ?>" alt="Brick"></a>
              <figcaption>
              </figcaption>
            </figure>
            <div class="row">
                <div class="col l12 m12 s12  text-images">
                <p style="margin-top: 15px;"><?php echo the_title(); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col l6 m6 s12  fecha-images">
                    <p>
                        <span><?php echo  get_the_date('j F, Y',$value->ID); ?></span>
                    </p>
                </div>
                <div class="col l6 m6 s12 text-mexico">
                    <a href="<?php echo get_permalink($value->ID); ?>"><p class="ver-mas">
                        Leer más <img src="<?php bloginfo("template_url");?>/images/blog/flecha-imagen.png" alt="">
                    </p></a>
                </div>
            </div>
        </div>
            <?php endwhile; ?>
    </div>
    <div class="col s12 m12 l12 pagination paginacion center-align ">
      <div class="col l5 m5 s4">
          <p>&nbsp</p>
      </div>
      <div class="col l7 m7 s7">
        <?php pagination('<', '>'); ?>
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
<!-- blog -->
<?php } ?>


<?php get_footer(); ?>
