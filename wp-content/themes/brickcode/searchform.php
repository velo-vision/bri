<div class="row" style="margin: 0px !important;">
	<div id="form1" class="s12 m12 l12">
		<div class="col s10 m10 l10">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<input type="search" placeholder=" Buscar propiedades" value="<?php the_search_query(); ?>" name="s" id="s"/>
		</div>
		<div class="s2 m2 l2" style="height: 26px; padding-top: 23px;">
	 		<input type=image src="<?php bloginfo('template_url'); ?>/images/buscar.png" class="icono">
	 		</form>
	 	</div>
	</div>
</div>
