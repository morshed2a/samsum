<?php

/* 
 * Achive Page
 * Theme Name: Samsun
 * version: 1.0.0
 * Author: Morshed Alam
 */
?>

<?php get_header(); ?>
<!-- section: blog -->
<section id="blog" class="section">
<div class="container">
	<h4>Our Blog</h4>
	<!-- Three columns -->
	<div class="row">
	<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<section id="blog">
				<?php do_action( 'samsun_above_content_after_header' ); ?>
				<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;
					wp_reset_query();
				else:
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
				<?php do_action( 'samsun_after_content_above_footer' ); ?>
			</section><!--/#blog-->
		</div><!--/.col-sm-7-->
		<?php get_sidebar(); ?>
	</div><!--/.row-->
</div><!--/.container-->
        </div>
		
</section>
<?php get_footer(); ?>