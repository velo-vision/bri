<?php
/* Template name: blog*/

get_header();
get_template_part( 'menu');


$args = array('category'=> '1','posts_per_page'   => 7,);
$posts_array = get_posts( $args );
$src1 = wp_get_attachment_image_src( get_post_thumbnail_id($posts_array[0]->ID), 'full' );//setoma la imagen con thumbnail_id
$url1 = $src1[0];
?>
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

	<div class="row" style="padding-top:80px;">
		<div class="col l10 offset-l1 m12 s12">
			<?php
				unset($posts_array[0]);
			?>
			<?php
				foreach ($posts_array as $key => $value) {
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
					<p style="margin-top: 15px;"><?php echo $value->post_title ?></p>
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
				<?php
					}
				 ?>
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

		<script src="<?php bloginfo("template_url");?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/materialize.js"></script>
		<script src="<?php bloginfo("template_url");?>/js/wow.min.js"></script>
		<!--slider carrusel-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.contentcarousel.js"></script>
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

 <?php
get_footer();
  ?>
