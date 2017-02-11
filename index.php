<?php get_header(); ?>
<?php
function create_slug($morshed2a) {
    $url = $morshed2a;
    $url = preg_replace('~[^&#092;pL0-9_]+~u', '-', $url);
    $url = trim($url, "-");
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
    $url = strtolower($url);
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
    return $morshed2a;
}

?>


<section id="featured" class="bg">
	<!-- start slider -->

			
	<!-- start slider -->
	
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            
              
                     
                    <?php
                
                   $list_item = ot_get_option( 'front_slider', array() );

                  if ( !empty( $list_item ) ) {
                    echo '<ul class="slides">';

                    foreach( $list_item as $name ) {
                      echo ' <li>';
                      echo '<a href="'.$name['front_slider_link'].'"><img src="'.$name['slider_img_upload'].'" alt></a>';
                      echo '<a href="'.$name['front_slider_link'].'"><div class="flex-caption"><h3>'.$name['title'].'</a></h3>';
                      echo '<p>'.$name['front_slider_Description'].'</p>';
                      echo '<a href="'.$name['front_slider_link'].'" class="btn btn-theme">Learn More</a>';
                      echo '</li>';

                    }
                    echo ' </ul>';
                  }
                  
                  ?>
                
        </div>
	<!-- end slider -->
			</div>
		</div>



	</section>
<!-- spacer section -->
<section class="spacer green" style="background-color:<?php get_option_tree( 'quotation_bg_color', '', 'flase' ); ?>;">
<div class="container">
	<div class="row">
		<div class="span6 alignright flyLeft">
			<blockquote class="large">
				 <?php get_option_tree( 'quotation_text_title', '', 'true' ); ?> <cite><?php get_option_tree( 'quotation_text_writer', '', 'true' ); ?></cite>
			</blockquote>
		</div>
		<div class="span6 aligncenter flyRight">
			<i class="<?php get_option_tree( 'quotation_icon', '', 'flase' ); ?>"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
<div class="container team-w">
	<h4>Who We Are</h4>
	<div class="row">
		<div class="span4 offset1">
			<div>
				<h2><?php get_option_tree( 'who_we_are_sub_title', '', 'true' ); ?></h2>
				<p><?php get_option_tree( 'who_we_are_description', '', 'true' ); ?></p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
				<img src="<?php get_option_tree( 'who_we_are_image', '', 'flase' ); ?>" alt="" />
			</div>
		</div>
	</div>
	<div class="row">
            <div class=""></div>
                <?php
                
                   $list_item = ot_get_option( 'who_we_are_people', array() );

                  if ( !empty( $list_item ) ) {
                    

                    foreach( $list_item as $name ) {
                      echo ' <div class="span2 flyIn">
			<div class="people">';
                      echo '<img class="team-thumb img-circle" src="'.$name['imgt'].'" alt>';
                      echo '<h3>'.$name['namet'].'</h3>';
                      echo '<p>'.$name['designationt'].'</p>';
                      echo '</div> </div>';

                    }
                    
                  }
                  
                  ?>
            
            
            
		
	</div>
</div>
<!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section orange">
<div class="container">
	<h4>Services</h4>
	<!-- Four columns -->
	<div class="row">
                
            <?php
                    //aminmation name
                    $a = 'animated-fast';
                    $b = 'animated-slow';
                    $c = 'animated';
                    $d = 'animated-fast';
                   $list_item = ot_get_option( 'service', array() );

                  if ( !empty( $list_item ) ) {
                    
                      $s =a;
                    foreach( $list_item as $name ) {
                      echo ' <div class="span3 '.$$s.' flyIn">
			<div class="service-box">';
                      echo '<img src="'.$name['imgs'].'" alt>';
                      echo '<h2>'.$name['title'].'</h2>';
                      echo '<p>'.$name['descriptions'].'</p>';
                      echo '</div> </div>';
                      $s++;
                    }
                    
                  }
                  
                  ?>
            
	</div>
</div>
</section>
<!-- end section: services -->
<!-- section: works -->
<section id="works" class="section">
<div class="container clearfix">
	<h4>Our Works</h4>
	<!-- portfolio filter -->
	<div class="row">
		<div id="filters" class="span12">
			<ul class="clearfix">
                           
                           <?php 
                           //php multi-dimensional array remove duplicate
                           echo '<li><a href="#" data-filter="*" class="active">
				<h5>All</h5>
				</a></li>';
                            $list_item =  ot_get_option( 'our_work_portfolio', array() );
                            foreach ($list_item as $val) {
                                 $term = get_term( $val['portfolio_name'], $taxonomy );
                                  $name_portfolios = $term->name ;
                                $newArr[$name_portfolios[2]] = $name_portfolios;    
                            }
                            $array = array_values($newArr);
                            
                            foreach (array_reverse($array) as $val_name) {
                                echo '<li><a href="#" data-filter=".'.$val_name.'">';
                                echo '<h5>'.$val_name.'</h5>';
                                echo '</a></li>'; 
                            }
                           
                           
                           
                  
                           
                           ?>
                            
                            
                            
                            
                            
                            
			</ul>
		</div>
		<!-- END PORTFOLIO FILTERING -->
	</div>
	<div class="row">
		<div class="span12">
			<div id="portfolio-wrap">
				<!-- portfolio item -->
                                           <?php    //aminmation name
                    
                   $list_item = ot_get_option( 'our_work_portfolio', array() );

                  if ( !empty( $list_item ) ) {
				
                                             foreach( $list_item as $name ) {
                                                $term = get_term( $name['portfolio_name'], $taxonomy );
                                                $name_portfolio = $term->name ;
                                                echo '<div class="portfolio-item grid '.$name_portfolio.'">
                                                        <div class="portfolio">';
                                                echo '<a href="'.$name['portfolio_img'].'" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">';
                                                echo '<img src="'.$name['portfolio_featured_image'].'" alt="" />';
                                                echo '<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>'.$name['title'].'</h5>';
                                                echo '<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>';
                                                //echo $name = $term->name;

                                              }

                                            }

                                            ?>
                                
				
				
				<!-- end portfolio item -->
			</div>
		</div>
	</div>
</div>
</section>
<!-- spacer section -->
<section class="spacer bg3" style="background: url(<?php get_option_tree( 'quotation_bg_image', '', 'true' ); ?>) 50% 0 no-repeat fixed;">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyLeft">
			<blockquote class="large">
				<?php get_option_tree( 'quotation_text_title', '', 'true' ); ?>
			</blockquote>
		</div>
		<div class="span12 aligncenter flyRight">
			<i class="<?php get_option_tree( 'quotation_icon_2', '', 'true' ); ?>"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
<section id="blog" class="section">
<div class="container">
	<h4>Our Blog</h4>
	<!-- Three columns -->
	<div class="row">
            
                
<?php
// published custom post
    $blog_show = new WP_Query(array(
      'post_type' => 'blog',
      'posts_per_page' => 4,
      ));
      ?>
      <?php
      if ($blog_show->have_posts()) {
        while ($blog_show->have_posts()) : $blog_show->the_post();
        ?>
                <div class="span3">
			<div class="home-post">
				<div class="post-image">
   
            <?php the_post_thumbnail('medium', array('class' => 'garments_img')); ?>

                                    </div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date"><?php the_time('F j, Y ') ?></span>
					<span class="tags">
                                           <?php $tags = get_the_tags($post->ID);  ?>
                                            <?php foreach($tags as $tag) :  ?>
                                            <a href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
                                                             <?php print_r($tag->name); ?>
                                                <?php endforeach; ?>
                                        </span>
				</div>
				<div class="entry-content">
                                    <h5><strong><a href="<?php the_permalink() ?>"><?php echo short_title(' ....', 4); ?></a> </strong></h5>
					<p>
					<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?> &hellip;
					</p>
					<a href="<?php the_permalink() ?>" class="more">Read more</a>
				</div>
			</div>
		</div>
              

        <?php 
        endwhile;  }
        wp_reset_query();

        ?> 
            
		
	</div>
	<div class="blankdivider30"></div>
	<div class="aligncenter">
		<a href="#" class="btn btn-large btn-theme">More blog post</a>
	</div>
</div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
<div class="container">
	<h4>Get in Touch</h4>
	<p>
		 Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
	</p>
	<div class="blankdivider30">
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
				<div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
				<form action="" method="post" role="form" class="contactForm">
					<div class="row">
						<div class="span6">
							<div class="field your-name form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-email form-group">
								<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
							</div>
							<div class="field subject form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
							</div>
						</div>
						<div class="span6">
							<div class="field message form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
							</div>
							<input type="submit" value="Send message" class="btn btn-theme pull-left">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- ./span12 -->
	</div>
</div>
</section>


<?php get_footer(); ?>