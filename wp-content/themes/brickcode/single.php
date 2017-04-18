<?php get_header();
get_template_part( 'menu');
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $cat = get_the_category();

	if($cat[0]->term_id == 4){

		global $detallePropiedad;
		$detallePropiedad = true;
		get_template_part( 'part_propiedad');
	}
	if($cat[0]->term_id == 1){
		get_template_part( 'part_blog');
	}

	 ?>
	<?php endwhile; else: ?>
	<div class="entry">
			<p>Sorry, no posts matched your criteria.</p>
	</div>
	<?php endif; ?>
	
	


<?php get_footer(); ?>
