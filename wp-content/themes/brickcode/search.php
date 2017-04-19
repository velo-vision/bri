<?php get_header(); ?>
<?php get_template_part( 'menu'); ?>



<div style="padding-top:80px;" class="row pading-no" >
    <div class="col l10 offset-l1 m12 s12">
        <?php
            if (have_posts()) : while (have_posts()) : the_post();
                // $src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'full' );//setoma la imagen con thumbnail_id
                // $url = $src[0];
        ?>
        <div class="col l4 m6 s12 size">
            <figure class="effect-bubba">
	            <?php 
	            	if (!empty(has_post_thumbnail())){
	                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );  ?>
			                  <a href="<?php echo get_permalink($value->ID); ?>">
		                    <?php echo '<li class="img_PROPIEDADES_bg" style="background: url('. $url.')">'; ?>
	            <?php  } else{?>
		            
		            	<li class="sin-imagen" style="background: url('wp-content/themes/brickcode/images/no-imagen.jpg')">
		            	<!-- <img src="<?php // bloginfo('template_url'); ?>/images/no-imagen.jpg"> -->
		           
		          <?php } ?>
                
                <!-- <img src="<?php // echo $url; ?>" alt="Brick"></a> -->
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

<?php get_footer(); ?>
