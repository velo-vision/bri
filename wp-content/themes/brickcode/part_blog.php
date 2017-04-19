<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1452691938393287";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
		<div class="row">
			<div class="row">
				<div class="col l12 m12 s12 blog">
						<p>
							<span>BLOG</span>
						</p>
				</div>
			</div>

			<div class="row">
				<div class="col l12 m12 s12">
						<div id="img-blog2" class="img-blog2">
							<?php echo get_the_post_thumbnail( null, 'full' );
              ?>
						</div>
				</div>
			</div>

			<div class="row">
				<div class="col l8 offset-l2  m8 offset-m2 s12 blog">
						<span><?php the_title() ?></span>
				</div>
			</div>
		</div>

				<div class="row">
					<div class="col l10 offset-l1 m10 offset-m1  s10 offset-s1 text" style="text-align:center;">
						<div class="col l6 m6 s12 ojo" >

							<span>&nbsp;</span><img src="" alt="">
							<span> &nbsp;</span><img src="" alt="">
						</div>
						<div class="col l6 m6 s12 color">
							<strong><?php the_time('j F, Y') ?></strong>
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col l10 offset-l1 m10 offset-m1 s12 text">
							<?php the_content(); ?>
						</div>
					</div>

						<div class="row">
							<div class="col l10 offset-l1 m8 offset-m2 s8 offset-s2 blog2">
							</div>
						</div>

						<div class="row" >
							<div class="col l12 m8 offset-m2 s12">
								<div class="col l12 m12 s12 compartir center">
									<p>Compartir</p>
								<span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
								<span class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>

									<!-- <span>Compartir</span>
									<div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true">
										<a class="fb-xfbml-parse-ignore" target="_blank" href="<?php echo get_permalink(); ?>">Compartir</a>
									</div>
									<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> 
 -->

								</div>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</div>
						</div>
					<?php $prev_post = get_previous_post(); ?>



						<div class="row center">
							<div class="col l12 m12 s10 offset-s1 center margin-sig">
								<?php if ( !empty( $prev_post ) ) : ?>
									<div class="col l6 m6 s6 anterior"  >
										<div class="col l1 m2 s5">
											<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog2/anterior.png" alt=""></a>
										</div>
										<div class="col l11 m10 s7">
											<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><span>Anterior</span></a>
										</div>
									</div>
								<?php endif; ?>
								<?php $next_post = get_next_post(); ?>
								<?php if ( !empty( $next_post ) ) : ?>
									<div class="col l6 m6 s6 siguiente">
										<div class="col l11 m10 s8">
											<a href="<?php echo get_permalink( $next_post->ID ); ?>"><span> Siguiente </span></a>
										</div>
										<div class="col l1 m2 s4">
											<a href="<?php echo get_permalink( $next_post->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog2/siguiente.png" alt=""></a>
										</div>
									</div>
								<?php endif; ?>
								</div>
							</div>
						</div>
<script>
	!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0],
			p=/^http:/.test(d.location)?'http':'https';

	if(!d.getElementById(id)){
		js=d.createElement(s);js.id=id;
			js.src=p+'://platform.twitter.com/widgets.js';
			fjs.parentNode.insertBefore(js,fjs);}
		}
	(document, 'script', 'twitter-wjs');
</script>