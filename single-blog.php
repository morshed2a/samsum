<?php
/**
 *    The template for dispalying the single-blog.
 *
 * @package    WordPress
 * @subpackage samsun
 */

?>
<?php get_header(); ?>


<!-- section: team -->
<section id="single_post" class="section single_post">
<div class="container">

	<div class="container">
	<div class="row">
		
		<div class="col-sm-8">
			
			<div class="col-sm-8 col-sm-offset-2">
				

				<section id="blog">
					<?php
					if ( have_posts() ):
						while ( have_posts() ):
							the_post();
							
							get_template_part( 'template-parts/content', 'single' );
						endwhile;
					endif;
					?>
				</section><!--/#blog-->
			</div><!--/.col-sm-7-->

		</div><!--/.row-->
	</div><!--/.container-->

	
</div>
<!-- /.container -->
</section>
<!-- end section: team -->

<?php get_footer(); ?>