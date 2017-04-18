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
						<form>
							<div class="col s12 m12 l12">
								<P class="titulo-modal">
								LOREM IPSUM SANTA FE
								</P>
							</div>
							<div class=" col s12 m12 l12">
								<input placeholder="Nombre:" id="first_name2" name="nombre" type="text" class="validate inputTExto" required>

							</div>
							<div class="col s12 m12 l12">
								<input placeholder="Telefono:" id="first_name2" name="telefono" type="text" class="validate inputTExto" required>
							</div>
							<div class=" col s12 m12 l12">
								<input placeholder="Email:" id="first_name2" name="email" type="email" class="validate inputTExto" required>
							</div>
							<div class="col s12 m12 l12 center">
								<button class="btn-contacto-modal center hvr-shutter-out-horizontal2" type="submit" name="action">ENVIAR</button>
							</div>
							<div class="col s12 m12 l10 offset-l1">
								<p class="texto-modal">
									A la brevedad nos pondremos en contacto contigo par darte la información necesaria para invertir en esta propiedad
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>
	    </div>
	</div>

		<div class="row">
			<div class="col l12 s12 content-slider" style="margin:50px 0;">
				<div class="col s12 m12 l4 text-brick">
					<p>
						<span>BRICK</span>
					</p>
					<p>
						<b>Inversion inmobiliaria</b>
					</p>
					<p class="borde-left">
						En Brick sabemos lo importante que es tu Patrimonio por lo que creamos esta rama,
						 en la cual establecemos relaciones estratégicas con los mejores desarrolladores
						 para ofrecerte excelentes productos de Inversión. Continuamente encontrado nuevos
					 	 proyectos en los cuales puedas invertir tu dinero y encontrar la mayor rentabilidad
						 para el mismo
					 </p>
				</div>
				<div class="col s12 m12 l8">
					<ul class="bxslider">
					  <li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/inmobiliario/slider1.png" title="Polanco" width="100%"  />
							<div class="pleca-propiedades texto-propiedades">
	              <p class="col l5 m5 s5 nomargin">
	                LOREM IPSUM, SANTA FE <br>
	                <strong>Desarrolladora:</strong> <span>Lorem ipsum</span>
	              </p>
	              <p class="col l7 m7 s7 title-propiedades nomargin">
	               	<a class="ver-mas-inmobiliario modal-trigger" href="#modal1">Invierte en este desarrollo</a>
	              </p>
            	</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/inmobiliario/slider1.png" title="Polanco" width="100%"/>
							<div class="pleca-propiedades texto-propiedades">
	              <p class="col l5 m5 s5 nomargin">
	                LOREM IPSUM, SANTA FE <br>
	                <strong>Desarrolladora:</strong> <span>Lorem ipsum</span>
	              </p>
	              <p class="col l7 m7 s7 title-propiedades nomargin">
	               	<a class="ver-mas-inmobiliario modal-trigger" href="#modal1">Invierte en este desarrollo</a>
	              </p>
            	</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/inmobiliario/slider1.png" title="Polanco" width="100%"/>
							<div class="pleca-propiedades texto-propiedades">
	              <p class="col l5 m5 s5 nomargin">
	                LOREM IPSUM, SANTA FE <br>
	                <strong>Desarrolladora:</strong> <span>Lorem ipsum</span>
	              </p>
	              <p class="col l7 m7 s7 title-propiedades nomargin">
	               	<a class="ver-mas-inmobiliario modal-trigger" href="#modal1">Invierte en este desarrollo</a>
	              </p>
            	</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
<?php 
get_footer();
  ?>