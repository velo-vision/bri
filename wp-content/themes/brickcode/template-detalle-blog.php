<!DOCTYPE html>

	<head>

		<title>Brick</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta charset="utf-8">
		<meta name="description" content="BRICK"/>
		<meta name="keywords" content="BRICK"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
		<link href="css/screen3.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100" rel="stylesheet">
	</head>

	<body>

	<header>
	</header>

		<div class="row blog1">
			<span>BLOG</span>
		</div>

		<div class="row">
			<div class="col l10 offset-l1 m12 s12">
				<div class="col l7 m12 s12 center">
					<img width="100%" src="images/blog/imagen-blog2.png" alt="">
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
			<div class="col l4 m6 s12 size">
				<figure class="effect-bubba">
				  <img src="images/blog/1.png" alt="Brick">
					<?php if (has_post_thumbnail()) {
		         $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		         //echo "<img src='". $url."' class='imagen-articulo-variado' />";
		         echo '<li class="img-variado" style="background: url('. $url.')">';
		       ?> 
				  <figcaption>
				    <!-- <h2>Joe <span>Diertay</span></h2>
				    <p>Lifes a garden, dig it</p>
				    <a href="#">View more</a> -->
				  </figcaption>
				</figure>
				<div class="row">
						<div class="col l12 m12 s12  text-images">
						<p style="margin-top: 15px;">LOS MEJORES ARQUITECTOS QUE TRANSFORMARON MÉXICO</p>
						</div>
				</div>
				<div class="row">
					<div class="col l6 m6 s12  fecha-images">
						<p>
							<span>02 | Agosto | 2016</span>
						</p>
					</div>
					<div class="col l6 m6 s12 text-mexico">
						<a href="#"><p class="ver-mas">
							Leer más <img src="images/blog/flecha-imagen.png" alt="">
						</p></a>
					</div>
				</div>
			</div>

			<div class="col l4 m6 s12 size">
				<figure class="effect-bubba">
				  <img src="images/blog/2.png" alt="Brick">
				  <figcaption>
				    <!-- <h2>Joe <span>Diertay</span></h2>
				    <p>Lifes a garden, dig it</p>
				    <a href="#">View more</a> -->
				  </figcaption>
				</figure>
					<div class="row">
						<div class="col l12 m12 s12 text-images">
							<p style="margin-top: 15px;">LAS ZONAS PEATONALES MÁS BONITAS DE CDMX</p>
						</div>
					</div>
					<div class="row">
						<div class="col l6 m6 s12 fecha-images">
							<p>
								<span>02 | Agosto | 2016</span>
							</p>
						</div>
						<div class="col l6 m6 s12 text-mexico">
							<a href="#"><p class="ver-mas">
								Leer más <img src="images/blog/flecha-imagen.png" alt="">
							</p></a>
						</div>
					</div>
				</div>

			<div class="col l4 m6 s12 size">
				<figure class="effect-bubba">
					<img src="images/blog/3.png" alt="Brick">
					<figcaption>
						<!-- <h2>Joe <span>Diertay</span></h2>
						<p>Lifes a garden, dig it</p>
						<a href="#">View more</a> -->
					</figcaption>
				</figure>
					<div class="row">
						<div class="col l12 m12 s12 text-images">
							<p class="text-luxury">¿QUE ES LUXURY LIVING? </p>
						</div>
					</div>
					<div class="row">
						<div class="col l6 m6 s12 fecha-images">
							<p>
								<span>02 | Agosto | 2016</span>
							</p>
						</div>
						<div class="col l6 m6 s12 text-mexico">
							<a href="#"><p class="ver-mas">
								Leer más <img src="images/blog/flecha-imagen.png" alt="">
							</p></a>
						</div>
					</div>
				</div>
				<div class="col l4 m6 s12 size">
					<figure class="effect-bubba">
						<img src="images/blog/4.png" alt="Brick">
						<figcaption>
							<!-- <h2>Joe <span>Diertay</span></h2>
							<p>Lifes a garden, dig it</p>
							<a href="#">View more</a> -->
						</figcaption>
					</figure>
						<div class="row">
							<div class="col l12 m12 s12 text-images">
								<p style="margin-top: 15px;">PANADERÍAS ARTESANALES QUE DEBES CONOCER EN LA CDMX</p>
							</div>
						</div>
						<div class="row">
							<div class="col l6 m6 s12 fecha-images">
								<p>
									<span>02 | Agosto | 2016</span>
								</p>
							</div>
							<div class="col l6 m6 s12 text-mexico">
								<a href="#"><p class="ver-mas">
									Leer más <img src="images/blog/flecha-imagen.png" alt="">
								</p></a>
							</div>
						</div>
				</div>
				<div class="col l4 m6 s12 size">
					<figure class="effect-bubba">
						<img src="images/blog/5.png" alt="Brick">
						<figcaption>
							<!-- <h2>Joe <span>Diertay</span></h2>
							<p>Lifes a garden, dig it</p>
							<a href="#">View more</a> -->
						</figcaption>
					</figure>
						<div class="row">
							<div class="col l12 m12 s12 text-images">
								<p style="margin-top: 15px;">LAS TERRAZAS MÁS COOL DE LA CIUDAD</p>
							</div>
						</div>
						<div class="row">
							<div class="col l6 m6 s12 fecha-images">
								<p>
									<span>02 | Agosto | 2016</span>
								</p>
							</div>
							<div class="col l6 m6 s12 text-mexico">
								<a href="#"><p class="ver-mas">
									Leer más <img src="images/blog/flecha-imagen.png" alt="">
								</p></a>
							</div>
						</div>
				</div>

				<div class="col l4 m6 s12 size">
					<figure class="effect-bubba">
						<img src="images/blog/6.png" alt="Brick">
						<figcaption>
							<!-- <h2>Joe <span>Diertay</span></h2>
							<p>Lifes a garden, dig it</p>
							<a href="#">View more</a> -->
						</figcaption>
					</figure>
					<div class="row">
							<div class="col l12 m12 s12 text-images">
								<p style="margin-top: 15px;">HISTORIA DE LAS GLORIETAS DE PASEO DE LA REFORMA</p>
							</div>
						</div>
						<div class="row">
							<div class="col l6 m6 s12 fecha-images">
								<p>
									<span>02 | Agosto | 2016</span>
								</p>
							</div>
							<div class="col l6 m6 s12 text-mexico">
								<a href="#"><p class="ver-mas">
									Leer más <img src="images/blog/flecha-imagen.png" alt="">
								</p></a>
							</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col l12 m12 s12" style="text-align:center" >
				<ul class="pagination">
				<li><a href="#"><</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">|</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">|</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">...</a></li>
				<li><a href="#">15</a></li>
				<li><a href="#">|</a></li>
				<li><a href="#">16</a></li>
				<li><a href="#">|</a></li>
				<li><a href="#">17</a></li>
				<li><a href="#">></a></li>
				</ul>
		 </div>
		</div>


		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.js"></script>
		<script src="js/wow.min.js"></script>
		<!--slider carrusel-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
		<script type="text/javascript">
			$('#ca-container').contentcarousel();
		</script>
		<!--fin slider-->

		<script>
			var $navbar = $("#menu"),
				y_pos = $navbar.offset().top,
				height = $navbar.height();

			$(document).ready(function() {

				$(document).scroll(function() {
					var scrollTop = $(this).scrollTop();

					if (scrollTop > y_pos + height) {
						$navbar.addClass("menu-fixed").animate({
							top: 0
						});
					} else if (scrollTop <= y_pos) {
						$navbar.removeClass("menu-fixed").clearQueue().animate({
							top: "-48px"
						}, 0);
					}
				});

				$(".hamburger").click(function() {
					$('.links').slideToggle().css("display", "inline-block");
				});
				$(window).resize(function() {
					if ($(window).width() > 767) {
						$('.links').show();
					} else {
						$('.links').hide();
					}
				});
			});
		</script>

		<script>
			new WOW().init();
		</script>
