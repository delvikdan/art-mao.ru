<?php
/**
 * Furniture functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Furniture
 */

if ( ! function_exists( 'furniture_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function furniture_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Furniture, use a find and replace
		 * to change 'furniture' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'furniture', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'furniture' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'furniture_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'furniture_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function furniture_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'furniture_content_width', 640 );
}
add_action( 'after_setup_theme', 'furniture_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function furniture_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'furniture' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'furniture' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'furniture_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function furniture_scripts() {
	wp_enqueue_style( 'furniture-style', get_stylesheet_uri(), array(), '1.1.8' );
	
	wp_enqueue_style( 'furniture-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,400i|Rubik:500,700&display=swap' );

    
    $post_type = get_post_type( $post_id );
    if ( (is_single()) or ($post_type == 'catalog') or (is_post_type_archive('catalog'))) {
      wp_enqueue_script( 'furniture-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20151212', true );
    }
    
    if (is_post_type_archive('catalog')) {
    wp_enqueue_script( 'furniture-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array(), '20151210', true );
    }
  
    if (is_front_page()) {
      wp_enqueue_script( 'furniture-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151219', true );
    }
    
	wp_enqueue_script( 'furniture-common-js',  get_template_directory_uri() . '/js/common.js', array(), '1.0.3', true );
	

}
add_action( 'wp_enqueue_scripts', 'furniture_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* удаление левых ссылок из шапки */
add_filter('xmlrpc_enabled', '__return_false');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');

remove_action('wp_head', 'rel_canonical');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


//Убираем локальный jquery из головы и добавляем свой
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
	wp_enqueue_script( 'jquery' );
}   



function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



function currentYear(){
    return date('Y');
}


// Hide ACF from admin menu outside of development
if ( WP_ENV !== 'development' ) {
  add_filter( 'acf/settings/show_admin', '__return_false' );
  add_filter( 'site_transient_update_plugins', 'ext_core_acf_remove_update_notification' );
}
// Disable ACF update notifications
function one_up_stop_acf_update_notifications( $value ) {

	// remove the plugin from the response so that it is not reported
	unset( $value->response[ trim( get_template_directory(), '/' ) .'/inc/acf/acf.php' ] );
	return $value;
}
add_filter( 'site_transient_update_plugins', 'one_up_stop_acf_update_notifications', 11 );


remove_action( 'admin_menu', 'cptui_plugin_menu' );