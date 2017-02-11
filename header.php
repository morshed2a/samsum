<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Samsun
 * @since Samsun 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Maxim - Modern One Page Bootstrap Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
 <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<!-- navbar -->
<?php $home_url = home_url(); ?>
<div class="navbar-wrapper">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Responsive navbar -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
				<div class="logo">
                                    <a href="<?php bloginfo('home'); ?>">
                                    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'logo') ) : ?>
                                <img src="<?php get_option_tree( 'logo', '', 'true' ); ?>" height="55px" />
                                <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-image.png" alt="" />
                                <?php endif; endif; ?>
                                    </a>
                                </div>
                                <div class="phone_number">
                                    <span><i class="fa fa-phone icon-2x" ></i></span>

                                    <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'phone_number') ) : ?>

                            <?php get_option_tree( 'phone_number', '', 'true' ); ?>

                                    <?php else : ?>
                                    +88 01916 829 396
                                    <?php endif; endif; ?>
                                </div>
				<!-- navigation -->
				<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
					<li><a title="team" href="<?php echo $home_url; ?>/#about">About</a></li>
					<li><a title="services" href="<?php echo $home_url; ?>/#services">Services</a></li>
					<li><a title="works" href="<?php echo $home_url; ?>/#works">Works</a></li>
					<li><a title="blog" href="<?php echo $home_url; ?>/#blog">Blog</a></li>
					<li><a title="contact" href="<?php echo $home_url; ?>/#contact">Contact</a></li>
					<li><a href="page.html">Page</a></li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Header area -->