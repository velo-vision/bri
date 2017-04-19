<?php $galeria =  get_field("galeria",$post->ID);?>
<div class="col l12 m12 s12">
		<div class="col l10 offset-l1 m10 offset-m1 s12">
			<div class="row nomargin">
				<ul class="bxslider">
					<?php if($galeria): ?>
						<?php foreach ($galeria as $key => $value): ?>
						  	<li>
								<img src="<?php echo $value['sizes']["full-propiedad"]; ?>" title="" width="100%"/>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<!-- FIN SLIDER -->

	<?php $amenidad =  get_field("amenidades",$post->ID);
	if(empty($amenidad)){
		$amenidad = [];
	}
	$lat =  get_field("latitud",$post->ID);
	$log =  get_field("longitud",$post->ID);
	$amenidades = array_flip($amenidad);
	$transaccion = get_field("transaccion",$post->ID);
	?>
<div class="row" style="margin-top:50px;">
	<div class="col l10 offset-l1">
		<div class="col l5 nomargin">
			<div class="col l12 m12 s12 nomargin detalle-venta">
				<div class="col l5 m12 s12">
						<strong>$<?php echo get_field( 'precio', $post->ID); ?></strong>
				</div>
				<div class="col l7 m12 s12 center" style="margin-top: 10px;">
						<a class=" detalles-boton btn"><?php echo $transaccion; ?></a>
				</div>
			</div>
			<div class="col l10 offset-l1 m12 s12 nomargin detalle-text" >
				<p class="border-info" style="margin-top: 20px;">
					<?php the_content(); ?>
				</p>
			</div>
			<div class="col l12 m12 s12 nomargin">
				<ul class="lista-propiedades info-propiedades detalles-propiedad">
					<li><img src="<?php bloginfo("template_url");?>/images/icon/casa.png" alt="Hogar" width="24px;"><span class="espacio-icono1"><?php echo get_field('superficie', $post->ID); ?> m<sup>2</sup></span></li>
					<li><img src="<?php bloginfo("template_url");?>/images/icon/tina.png" alt="Baño" width="24px;"><span class="espacio-icono1"><?php echo get_field('banios', $post->ID); ?></span></li>
					<li><img src="<?php bloginfo("template_url");?>/images/icon/cama.png" alt="Recamara" width="24px;"><span class="espacio-icono1"><?php echo get_field('recamaras', $post->ID); ?></span></li>
					<li><img src="<?php bloginfo("template_url");?>/images/icon/coche.png" alt="Estacionamiento" width="24px;"><span class="espacio-icono1"><?php echo get_field('estacionamiento', $post->ID); ?></span></li>
				</ul>
			</div>
			<div class="col l12 m12 s12 lista-propiedades info-propiedades detalles-propiedad nomargin">
				<p class="amenidades-color">AMENIDADES</p>
			</div>
			<div class="col l12 m12 s12 nomargin">
				<ul class="lista-propiedades info-propiedades amenidades-color nomargin">
					<li class=" espacio-icono2"><i class="fa <?php echo isset($amenidades['bodega'])? 'fa-check-square-o' : 'fa-square-o' ?>" aria-hidden="true"></i> <span>Bodega(s)</span></li>
					<li class=" espacio-icono2"><i class="fa <?php echo isset($amenidades['salamusica'])? 'fa-check-square-o' : 'fa-square-o' ?>" aria-hidden="true"></i> <span>Sala de música y cine</span></li>
					<li class=" espacio-icono2"><i class="fa <?php echo isset($amenidades['salonfiestas'])? 'fa-check-square-o' : 'fa-square-o' ?>" aria-hidden="true"></i> <span>Salon de Fiestas</span></li>
					<li class=" espacio-icono2"><i class="fa <?php echo isset($amenidades['estudio'])? 'fa-check-square-o' : 'fa-square-o' ?>" aria-hidden="true"></i> <span>Estudio</span></li>
					<li class=" espacio-icono2"><i class="fa <?php echo isset($amenidades['salonusosmultiples'])? 'fa-check-square-o' : 'fa-square-o' ?>" aria-hidden="true"></i> <span>Salón de usos múltiples</span></li>
					<li class=" espacio-icono2"><i class="fa <?php echo isset($amenidades['cuartoTV'])? 'fa-check-square-o' : 'fa-square-o' ?>" aria-hidden="true"></i> <span>Cuarto de TV</span></li>
				</ul>
			</div>
		</div>
		<div class="col l7 m12 s12" style="margin-top:20px;">
			<div  class="row content-map nomargin">
				<div class="col l12 m12 s12 nopadding" id="regrasar-mapa">
					<div class="mapa" id="mack-map" style=""></div>
				</div>
			</div>
		</div>
	</div>
</div>

		<div class="row">
			<P class="subtitulo-contacto" style="padding-top:40px;">
				¿Quieres saber mas acerca de esta propiedad?
			</P>
			<form class="col l10 offset-l1 m10 offset-m1 s10 offset-s1" action="">
				<div class="col l4 m12 s12">
					<input placeholder="Nombre:" name="nombre" type="text" class="validate" required>
				</div>
				<div class="col l4 m12 s12">
					<input placeholder="Teléfono:" name="telefono" type="tel" class="validate" required>
				</div>
				<div class="col l4 m12 s12">
					<input placeholder="Correo:" name="email" type="email" class="validate" required>
				</div>
				<div class="col l12 m12 s12">
					<textarea placeholder="Mensaje" name="message" class="materialize-textarea" required></textarea>
				</div>
				<div class="col l12 m12 s12 center">
					<button class="btn-contacto center hvr-shutter-out-horizontal2" type="submit" name="action">ENVIAR</button>
				</div>
			</form>
		</div>

<div class="row">
	<p class="propiedades-detalles">
		propiedades relacionadas
	</p>
</div>

<?php $args = array('category'=> '4','posts_per_page'   => 6,);
$posts_array = get_posts( $args ); ?>
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
									<strong class="izquierda"> <?php echo $value->post_title ?></strong> <span class="left-amenidades"><?php echo get_field('colonia', $value->ID); ?></span>
							</div>
							<div class="col l12 s12" >
								<p class="texto-slider-propiedades01 title-slider-propiedades01">
									<ul class="lista-slider-3 center">
										<li><span class="espacio-slider"><?php echo get_field('superficie', $value->ID); ?> m<sup>2</sup></span><img src="<?php bloginfo("template_url");?>/images/icon/casa.png" alt="Hogar"></li>
										<li><span class="espacio-slider"><?php echo get_field('banios', $value->ID); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/tina.png" alt="Baño"></li>
										<li><span class="espacio-slider"><?php echo get_field('recamaras', $value->ID); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/cama.png" alt="Recamara"></li>
										<li><span class="espacio-slider"><?php echo get_field('estacionamiento', $value->ID); ?></span><img src="<?php bloginfo("template_url");?>/images/icon/coche.png" alt="Estacionamiento"></li>
									</ul>
								</p>
							</div>
							<div class="row nomargin">
								<div class="col l12 s12 nomargin">
									<div class="col l6 m12 s12 nomargin">
										<p style="padding-top:10px;">
											<b>$ <?php echo get_field('precio', $value->ID); ?></b>
										</p>
									</div>
									<div class="col l6 m12 s12 nomargin">
										<a href="<?php echo get_permalink($value->ID); ?>"><p class="ver-mas-detalles">
											VER DETALLES DE PROPIEDAD
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
<script>
var locations = [['Brick', <?php echo $lat; ?>,<?php echo $log; ?>]],data_loc1 = <?php echo $lat; ?>, data_loc2 = <?php echo $log; ?>;
</script>
