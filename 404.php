<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @since DW_Fashion 1.0
 */
?>

<?php get_header(); ?>
<div class="main">
<section id="ccr-main-section">
    <div class="container">

        <section id="ccr-left-section" class="col-md-12">

                <section id="ccr-404-error">
			<div class="error-404">
				<p class="error-msg">Error 404</p>
				<h2>Page Not Found!</h2>
				<p>Sorry! We could not found the page you are looking for! Please search below...</p>
				
						<form class="ccr-gallery-ttile" action="<?php echo home_url( '/' ); ?>">
						<input type="text" id="404-search" name="s" placeholder="Search here..." required>
						
                                                <button type="submit">Search</button>
                                                </form> 
                                
                                
			
			</div>	<!-- /.error-404 -->
		</section> <!-- /#ccr-404-error -->
		
            

			
		</section><!-- /.col-md-8 / #ccr-left-section -->






    </div>
</section>
</div>
<?php get_footer(); ?>