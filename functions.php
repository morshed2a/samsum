<?php

/**
 /**
 * Samsun functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Samsun
 * @since Samsun
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see samsun_content_width()
 *
 * @since Samsun 1.0
 */

    // Extras
    require_once trailingslashit( get_template_directory() ) . 'inc/extras.php';


    // JetPack
    require_once trailingslashit( get_template_directory() ) . 'inc/jetpack.php';


 /* Add Theme Option */
/***********************************************************************************************/
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'inc/theme_option/ot-loader.php' );
include_once( 'inc/theme_tree/meta-boxes.php' );
include_once( 'inc/theme_tree/theme-options.php' );

 /* inc folder function code add */
/***********************************************************************************************/

include( get_template_directory(). '/inc/enqueue.php' );
include( get_template_directory(). '/inc/theme_support.php' );
include_once( get_template_directory(). '/inc/navbar.php' );
include( get_template_directory(). '/inc/support.php' );
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/pagination.php';
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 /* inc/componets  folder function code add */
/***********************************************************************************************/
// Components
		require_once trailingslashit( get_template_directory() ) . 'inc/components/entry-meta/class.mt-entry-meta.php';
		require_once trailingslashit( get_template_directory() ) . 'inc/components/author-box/class.mt-author-box.php';
		require_once trailingslashit( get_template_directory() ) . 'inc/components/related-posts/class.mt-related-posts.php';
		require_once trailingslashit( get_template_directory() ) . 'inc/components/nav-walker/class.mt-nav-walker.php';

/**
 



if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'samsun_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Samsun 1.0
 */
function samsun_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
     * If you're building a theme based on twentyfifteen, use a find and replace
     * to change 'twentyfifteen' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'samsun' );
    //Load Theme Textdomain
    //load_theme_textdomain( 'samsun', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
	
	//add woocommerce
	add_action( 'after_setup_theme', 'woocommerce_support' );
		function woocommerce_support() {
			add_theme_support( 'woocommerce' );
		}
                
                

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );
    
    // Add Image Size
		add_image_size( 'samsun-blog-list', 750, 500, true );
		add_image_size( 'samsun-widget-recent-posts', 70, 70, true );
		add_image_size( 'samsun-blog-post-related-articles', 240, 206, true );
		add_image_size( 'samsun-front-page-latest-news', 270, 168.75, true );
		//add_image_size( 'samsun-front-page-testimonials', 127, 127, true );
		//add_image_size( 'samsun-front-page-projects', 476, 476, true );
		//+add_image_size( 'samsun-front-page-person', 125, 125, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'samsun' ),
        'social'  => __( 'Social Links Menu', 'samsun' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );


    add_theme_support( 'custom-background', apply_filters( 'samsun_setup_custom_background_args', array(
        'default-color'      => $default_color,
        'default-attachment' => 'fixed',
    ) ) );

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
     */
    //add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

    // Indicate widget sidebars can use selective refresh in the Customizer.
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    /*******************************************/
		/*************  Welcome screen *************/
		/*******************************************/

		if ( is_admin() ) {

			global $samsun_required_actions;

			/*
			 * id - unique id; required
			 * title
			 * description
			 * check - check for plugins (if installed)
			 * plugin_slug - the plugin's slug (used for installing the plugin)
			 *
			 */
			$samsun_required_actions = array(
				
				array(
					"id"          => 'samsun-req-ac-install-contact-forms',
					"title"       => esc_html__( 'Install Contact Form 7', 'samsun' ),
					"description" => esc_html__( 'Samsun works perfectly with Contact Form 7. Please install it & make sure you create at least 1 contact form before trying to set it on the front-page.', 'samsun' ),
					"check"       => defined( "WPCF7_PLUGIN" ),
					"plugin_slug" => 'contact-form-7',
				)
			);

			require get_template_directory() . '/inc/admin/welcome-screen/welcome-screen.php';
		}
    
    
    
}
endif; // samsun_setup
add_action( 'after_setup_theme', 'samsun_setup' );

if ( function_exists('w3tc_pgcache_flush') ) {
  w3tc_pgcache_flush();
} else if ( function_exists('wp_cache_clear_cache') ) {
  wp_cache_clear_cache();
}

/**
 * Display recommended plugins with the TGM class
 */
function samsun_register_required_plugins() {
	$plugins = array(
		// The recommended WordPress.org plugins.
		
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
	);
	$config = array(
		'id'           => 'samsun',
		'menu'         => 'tgmpa-install-plugins',
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'samsun_register_required_plugins' );

