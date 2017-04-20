<?php /* Template name: inversion */ 
get_header();
get_template_part( 'menu');
?>

		<!--Popoup-->

	<div id="modal1" class="modal ">
	    <div class="modal-content" style="background-color:white;">
			<div class="row nomargin" style="border:2px solid #c9c0b8;">
				<div class="col s12 m12 l12 ">
					<div class="modal-footer">
						<a href="#" class=" modal-action modal-close btn-flat cerrar-modal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/cerrar.png" alt="Brick"></a>
					</div>
					<div class="col s12 m2 l5 center imagen-modal">
						<img src="<?php echo get_template_directory_uri(); ?>/images/login.png" alt="" >
					</div>
					<div class="col s12 m7 l6">
						<?php echo do_shortcode('[contact-form-7 id="125" title="Contacto"]'); ?>
					</div>
				</div>
			</div>
	    </div>
	</div>

<!-- code est -->	
<?php $post = get_post(111);?>
	 <div class="row">
		<div class="col l12 s12 content-slider sin-margin-aqui" style="margin:50px 0;" >
			<div class="col s12 m12 l4 text-brick">
				<p><span>BRICK</span></p>
				<p><b><?php  echo $title = $post->post_title; ?></b></p>
				<p class="borde-left"><?php echo $contenido = $post->post_content;?></p>
			</div>
			<div class="col s12 m12 l8">
				<ul class="bxslider">
				<?php $texto =  get_field("campos", 111); 
					foreach ($texto as $key => $value) {?>

					<li>
						<img src="<?php echo $value['imagen'] ?>" title="Polanco" width="100%"  />
						<div class="pleca-propiedades texto-propiedades">
			              <p class="col l5 m5 s5 nomargin"><?php echo $value['nombre'] ?>
			               <br>
			                <strong>Desarrolladora:</strong> <span><?php echo $value['desarrolladora'] ?></span>
			              </p>
			              <p class="col l7 m7 s7 title-propiedades nomargin">
			               	<a class="ver-mas-inmobiliario modal-trigger" href="#modal1">Invierte en este desarrollo</a>
			              </p>
		            	</div>
					</li>

		<?php } ?>
				</ul>
			</div>
		</div>
	</div> 




<!-- code est -->	

<?php 
get_footer();
  ?>