		<footer class="footer">
			<div class="row nomargin">
				<div class="col l12 s12">
					<div class="col l2 s12 center">
						<a href="<?php echo site_url();?>"><img src="<?php bloginfo("template_url");?>/images/logo-footer.png" alt="Logo Footer"></a>
					</div>
					<div class="col l6 s12 menu-footer center">
						<div class="col l12 s12">
							<div class="col l3 s6">
								<a href="<?php echo site_url();?>#nosotros"><p>
									nosotros
								</p></a>
							</div>
							<div class="col l3 s6">
								<a href="<?php echo get_category_link(4); ?>"><p>
									propiedades
								</p></a>
							</div>
							<div class="col l6 s12">
								<a href="<?php echo site_url("?page_id=60");?>/inversion"><p>
									brick inversión inmobiliaria
								</p></a>
							</div>
						</div>
						<div class="col l12 s12">
							<div class="col l3 s6">
								<a href="<?php echo get_category_link(1); ?>"><p>
									blog
								</p></a>
							</div>
							<div class="col l3 s6">
								<a href="<?php echo site_url();?>#contacto"><p>
									contacto
								</p></a>
							</div>
							<div class="col l6 s12">
								<a href="https://www.facebook.com/" target="_blank"><div class="sociales-footer"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
								<a href="https://twitter.com/iniciarsesion?lang=es" target="_blank"><div class="sociales-footer"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
							</div>
						</div>
					</div>
					<div class="col l4 s12 design-footer center nomargin">
						<div class="col l12 s12 nomargin">
							<div class="col l6 s12 nomargin">
								<p><i class="fa fa-phone" aria-hidden="true"></i> 55 14 52 67 90</p>
							</div>
							<div class="col l6 s12 nomargin">
								<p><i class="fa fa-envelope" aria-hidden="true"></i> contacto@brickci.com</p>
							</div>
						</div>
						<div class="col l12 s12" style="text-align:center;">
							<p class="nomargin">Dirección: Guillermo Gonzalez Camarena #999, Int. PH 4403. Santa Fe, 01219 Mexico DF</p>
						</div>
						<div class="col l12 s12" style="text-align:center;">
							<p>@2016 All Rights Reserved. Designed by Velosoft</p>
						</div>
					</div>
				</div>
			</div>
		</footer>



 		<!-- <script src="<?php//  bloginfo("template_url");?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php // bloginfo("template_url");?>/js/materialize.js"></script>
        <script src="<?php // bloginfo("template_url");?>/js/wow.min.js"></script> -->
        <!--slider carrusel-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.contentcarousel.js"></script>
        <script type="text/javascript">
            $('#ca-container').contentcarousel();
        </script>


		<script src="<?php bloginfo("template_url");?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/materialize.js"></script>
		<script src="<?php bloginfo("template_url");?>/js/wow.min.js"></script>
		<script src="<?php bloginfo("template_url");?>/js/jquery.bxslider.js"></script>
		<script src="<?php bloginfo("template_url");?>/js/slick.min.js"></script>



		<?php global $detallePropiedad;
		if(isset($detallePropiedad)): //Declaramos esta variable cuando estemos en el detalle de una propiedad ?>
		<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDNTSMEOij97Zpc3vSSkP1pXOIWg8tH-gA&sensor=false'></script>
		<script src="<?php bloginfo("template_url");?>/js/maps.js"></script>
		<?php
		endif;
		if(is_home()):
		 ?>
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
		<?php endif; ?>
		<script>
			new WOW().init();
			// slider detalles
			$('.responsive').slick({
				dots: false,
				prevArrow: $('.prev'),
				nextArrow: $('.next'),
				infinite: true,
				autoplay: false,
				dots: false,
				prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
				nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
				autoplaySpeed: 1500,
				speed: 768,
				slidesToShow: 3,
				slidesToScroll: 3,
				responsive: [{
						breakpoint: 1200,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							infinite: true,
							dots: true
						}
					}, {
						breakpoint: 700,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}, {
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
		</script>

		<script>

		/*Scroll*/

		$(function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});

		/*slider*/


		$('.bxslider').bxSlider({
		  mode: 'horizontal',
			auto:true,
			pager:false
		});

		/*Drop*/

		$('.dropdown-button').dropdown({
			 inDuration: 300,
			 outDuration: 225,
			 constrain_width: false, // Does not change width of dropdown to that of the activator
			 hover: false, // Activate on hover
			 gutter: 0, // Spacing from edge
			 belowOrigin: false, // Displays dropdown below the button
			 alignment: 'left' // Displays dropdown with edge aligned to the left of button
		 }
	 );

	 $('.dropdown-button').dropdown('open');
		</script>
		<script>
		$(".cross").hide();
			$(".menu").hide();
			$(".hamburger").click(function() {
				$(".menu").slideToggle("slow", function() {
					$(".hamburger").hide();
					$(".cross").show();
				});
			});

			$(".cross").click(function() {
				$(".menu").slideToggle("slow", function() {
					$(".cross").hide();
					$(".hamburger").show();
				});
			});
		</script>
	</body>
</html>
