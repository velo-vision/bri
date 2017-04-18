<?php get_header();
get_template_part( 'menu');

$args = array('category'=> '4',);
$posts_array = get_posts( $args );
$src1 = wp_get_attachment_image_src( get_post_thumbnail_id($posts_array[0]->ID), 'full' );//setoma la imagen con thumbnail_id
$url1 = $src[0];
?>
<div class="row">
			<div class="col l10 offset-l1 m12 s12">
				<div class="col l7 m12 s12 center">
					<img width="100%" src="<?php echo $url1; ?>" alt="">
				</div>
				<div class="col l5">
					<div class="row">
						<div class="col l12 m12 s12 text-patrimonio">
							<p class="nomargin">
								<span>MÉXICO PATRIMONIO MUNDIAL</span>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col l10 offset-l1 m12 s12 text-blog1" style="padding-bottom:40px; padding:0px;">
							<p>El país cuenta con 27 sitios culturales, cinco naturales y uno mixto en la lista del organismo. Así, ocupa el sexto lugar a nivel global<br><br>

									México es el país del continente americano con más bienes inscritos en la lista de Patrimonio Mundial de la Organización de las Naciones Unidas para la Educación, la Ciencia y la Cultura (Unesco), informó este lunes la Secretaría de Cultura mexicana a través de un comunicado.<br><br>

									México cuenta con 27 bienes culturales, cinco naturales y uno mixto, inscritos en la lista de la Unesco.<br><br>

									A nivel mundial, el país se posiciona en el sexto lugar de este registro de Patrimonio Mundial, el cual reúne “monumentos y sitios de gran riqueza natural y cultural que pertenecen a toda la humanidad” y que son...
								</p>
						</div>
					</div>
					<div class="row">
						<div class="col l6 m6 s12 center fecha" style="padding-top:10px;">
							<p>
								<span>02 | Agosto | 2016</span>
							</p>
						</div>
						<div class="col l6 m6 s12">
							<a href="#"><p class="ver-mas-patrimonio">
								Leer más
							</p></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="row" style="padding-top:80px;">
		<div class="col l10 offset-l1 m12 s12">
			
			<?php 
				foreach ($posts_array as $key => $value) { 
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'full' );//setoma la imagen con thumbnail_id
					$url = $src[0];
			?>
			<div class="col l4 m6 s12 size">
				<figure class="effect-bubba">
			  		<img src="<?php echo $url; ?>" alt="Brick">
				  <figcaption>				    
				  </figcaption>
				</figure>
				<div class="row">
					<div class="col l12 m12 s12  text-images">
					<p style="margin-top: 15px;"><?php echo $value->post_title ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col l6 m6 s12  fecha-images">
						<p>
							<span><?php echo  $value->post_date = date("F j, Y"); ?></span>
						</p>
					</div>
					<div class="col l6 m6 s12 text-mexico">
						<a href="#"><p class="ver-mas">
							Leer más <img src="<?php bloginfo("template_url");?>/images/blog/flecha-imagen.png" alt="">
						</p></a>
					</div>
				</div>
			</div>
				<?php		
					}
				 ?>				
		</div>
	</div>
<?php get_footer(); ?>