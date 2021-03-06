<?php get_header(); ?>
<body>
<div id="header-background">
	<div class="valign-wrapper">
		<div class="valign">
			<img class="wow zoomIn" data-wow-duration="s" data-wow-delay="s" src="<?php bloginfo("template_url");?>/images/logo-home.png" alt="BRICK">
		</div>
	</div>
</div>
 <div id="menu">
	 <div class="hamburger">
		 <span></span>
		 <span></span>
		 <span></span>
	 </div>
	 <div class="links menu-brick">
		<ul>
			<li><a href="<?php echo site_url();?>#nosotros">nosotros</a></li>
			<li <?php if(is_category("4")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(4); ?>">propiedades</a></li>
			<li><a href="<?php echo site_url("?page_id=60");?>/inversion">brick inversión inmobiliaria</a></li>
			<li <?php if(is_category("1")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(1); ?>">blog</a></li>
			<li><a href="<?php echo site_url();?>#contacto">contacto</a></li>
		</ul>
	</div>
</div>
<!-- FIN MENU -->

	<?php  $post = get_post(57); ?><!-- nosotros -->
		<div id="nosotros" class="row">
			<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
				<div class="col l6 m12 s12">
					<p class="title-nosotros nomargin">
						<?php echo $post->post_title; ?>
					</p>
					<?php echo $post->post_content; ?>
				</div>
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );//setoma la imagen con thumbnail_id
								$url = $src[0]; ?>
				<div class="col l6 m12 s12 center">
					<img width="100%;" src="<?php  echo $url;?>" alt="BRICK" >
				</div>
			</div>
		</div>
<!-- propiedades -->
			<div  class="row">
				<p class="propiedades">
					propiedades
				</p>
			</div>
			<?php $args = array('category'=> '4','posts_per_page'   => 6,);
			$posts_array = get_posts( $args ); ?>
		<!-- Slider -->
				<div class="row" style="position:relative;z-index:5;">
					<div class="col l12 m12 s12 content-slider">
						<div class="slider responsive">
							<?php
							foreach ($posts_array as $key => $value):
								$src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'full' );//setoma la imagen con thumbnail_id
								$url = $src[0];
							?>

							<div class="col l12 s12">
								<div class="border-slider">
									<img  src="<?php echo $url; ?>" alt="<?php echo $value->post_title ?>" width="100%" />
									<div class="detalles-brick">
										<div class="col l12 s12">
												<strong class="izquierda"> <?php echo $value->post_title ?></strong> <span class="left-amenidades"><?php echo get_post_meta($value->ID, 'colonia', true); ?></span>
										</div>
										<div class="col l12 s12" >
											<p class="texto-slider-propiedades01 title-slider-propiedades01">
												<ul class="lista-slider-3 center">
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'superficie', true); ?> m<sup>2</sup></span><img src="<?php bloginfo("template_url");?>/images/icon/casa.png" alt="Hogar"></li>
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'banios', true); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/tina.png" alt="Baño"></li>
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'recamaras', true); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/cama.png" alt="Recamara"></li>
													<li><span class="espacio-slider"><?php echo get_post_meta($value->ID, 'estacionamiento', true); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/coche.png" alt="Estacionamiento"></li>
												</ul>
											</p>
										</div>
										<div class="row nomargin">
											<div class="col l12 s12 nomargin">
												<div class="col l6 m12 s12 nomargin">
													<p style="padding-top:10px;">
														<b>$ <?php echo get_post_meta($value->ID, 'precio', true); ?></b>
													</p>
												</div>
												<div class="col l6 m12 s12 nomargin">
													<a href="<?php echo get_permalink($value->ID); ?>"><p class="ver-mas-detalles">
														VER DETALLES DE LA PROPIEDAD
													</p></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<div class="row" style="position:relative;z-index:5;">
					<div class="col l12 m8 offset-m2 s8 offset-s2" >
						<div class="hvr-shutter-out-horizontal btn-propiedades">
							<a href="<?php echo get_category_link(4); ?>">ver todas las propiedades</a>
						</div>
					</div>
				</div>

				<div class="row" id="contacto">
				<?php echo do_shortcode('[contact-form-7 id="128" title="contactoHome"]'); ?>					
				</div>


	<?php
	include("wcode_mailer/wcode_mailer.php");
	if(isset($_POST)){
		wcode_mail($_POST['email'], $_POST['nombre'], "esteban@velosoft.mx", "Contacto WEB");
	}?>
<?php get_footer(); ?>
