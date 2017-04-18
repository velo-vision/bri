<?php 
/* Template name: propiedades*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo bloginfo('name' ); wp_title(); ?></title>
	<meta name="description" content="BRICK"/>
	<meta name="keywords" content="BRICK"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo("template_url");?>/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/animate.css">
	<link href="<?php bloginfo("template_url");?>/css/screen.css" rel="stylesheet">
	<link href="<?php bloginfo("template_url");?>/css/jquery.bxslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php bloginfo("template_url");?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/slider-propiedades.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700,900" rel="stylesheet">
</head>
	<body>
<?php 
get_template_part( 'menu');


$args = array('category'=> '4','posts_per_page'   => 12,);
$posts_array = get_posts( $args );
$first_posts_array = array_slice($posts_array,0,3);
unset($posts_array[0],$posts_array[1],$posts_array[2]);
?>
		<div class="row">
			<div class="col l12 m12 s12 nomargin">
					<ul class="bxslider" style="margin-top:-50px;">
						<?php  foreach ($first_posts_array as $key => $value): 
						$src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'slider-propiedad' );//setoma la imagen con thumbnail_id
						$url = $src[0];
						?>
						  	<li>
								<img src="<?php echo $url; ?>" title="<?php echo $value->post_title ?>" width="100%"/>
								<div class="col l12 m12 pleca-brick">
									<div class="col l6 m12">
										<p class="titulo-propiedad">
											<?php echo $value->post_title ?>
										</p>
										<p class="costo-propiedad">
											<strong>$ <?php echo get_post_meta($value->ID, 'precio', true); ?></strong>
										</p>
									</div>
									<div class="col l6 m12 center">
										<div class="col l6 offset-l3 m12">
											<a href="<?php echo get_permalink($value->ID); ?>"><p class="ver-mas-detalles">
												VER DETALLES DE PROPIEDAD
											</p></a>
										</div>
										<div class="col l12 m12">
											<p class="texto-slider-propiedades01 title-slider-propiedades01">
												<ul class="lista-slider-3 center">
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'superficie', true); ?> m<sup>2</sup></span><img src="<?php bloginfo("template_url");?>/images/icon/casa.png" alt="Hogar"></li>
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'banios', true); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/tina.png" alt="Baño"></li>
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'recamaras', true); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/cama.png" alt="Recamara"></li>
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'estacionamiento', true); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/coche.png" alt="Estacionamiento"></li>
												</ul>
											</p>
										</div>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
						
					</ul>
			</div>
		</div>

		<div class="row">
			<div class="col l12 s12">
				<?php 
				foreach ($posts_array as $key => $value):
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'slider-propiedad' );//setoma la imagen con thumbnail_id
					$url = $src[0];
				?>

				<div class="col l4 m6 s12">
					<div class="col l12 s12 border-slider nomargin">
						<div>
							<img  src="<?php echo $url; ?>" alt="<?php echo $value->post_title ?>" width="100%" />
						</div>
						<div class="col l12 s12 detalles-brick ">
							<div class="col l6 s12">
								<p>
									<strong> <?php echo $value->post_title ?></strong>
								</p>
								<p style="color:#282828">
									<span><?php echo get_post_meta($value->ID, 'colonia', true); ?></span>
								</p>
							</div>
							<div class="col l6 s12">
								<p style="padding-top:15px;">
									<b>$ <?php echo get_post_meta($value->ID, 'precio', true); ?></b>
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

				
	<?php endforeach; ?>

				

			</div>
		</div>

<?php 
get_footer();
  ?>
