<?php
/*
* Charlie_Foxtrot Setup
*
* @package WordPress
* @subpackage Charlie_Foxtrot
* @since 1.0
* @version 1.0
*/

function charlie_foxtrot_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. 
	 * If you're building a theme based on Charlie Foxtrot, use a find and replace
	 * to change 'charlie_foxtrot' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'charlie-foxtrot' );

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

	add_image_size( 'charlie-foxtrot-featured-image', 2000, 1200, true );

	add_image_size( 'charlie-foxtrot-thumbnail-avatar', 100, 100, true );

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'charlie-foxtrot' ),
		'sub' => __( 'Sub Menu', 'charlie-foxtrot' ),
		'sidebar' => __( 'Side Menu', 'charlie-foxtrot' ),
		'footer1' => __( 'Footer Menu 1', 'charlie-foxtrot' ),
		'footer2' => __( 'Footer Menu 2', 'charlie-foxtrot' ),
		'footer3' => __( 'Footer Menu 3', 'charlie-foxtrot' ),
	) );

/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Charlie Foxtrot, use a find and replace
	 * to change 'charlie-foxtrot' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'charlie-foxtrot', get_template_directory() . '/languages' );

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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'search-form',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-cart', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Register Sidebar Widgets
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'charlie-foxtrot' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'charlie-foxtrot' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Register Social Widgets
	register_sidebar( array(
		'name'          => 'Social 1',
		'id'            => 'social_1',
		'description'   => 'Social Proof',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => 'Social 2',
		'id'            => 'social_2',
		'description'   => 'Social Proof',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Social 3',
		'id'            => 'social_3',
		'description'   => 'Social Proof',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Social 4', 
		'id'            => 'social_4',
		'description'   => 'Social Proof',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Social 5',
		'id'            => 'social_5',
		'description'   => 'Social Proof',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	// Register Footer Widgets.
	register_sidebar( array(
		'name' => esc_html__( 'Footer Menu 1','charlie-foxtrot' ),
		'id' => 'footer-menu1',
		'description' => esc_html__( 'Appears in the footer 1 area','charlie-foxtrot' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3 class="text-center">',
		'after_title' => '</h3><hr /><div class="col-xs-12 col-md-8 col-md-offset-2">',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Menu 2', 'charlie-foxtrot' ),
		'id' => 'footer-menu2',
		'description' => esc_html__( 'Appears in the footer 2 area', 'charlie-foxtrot' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3 class="text-center">',
		'after_title' => '</h3><hr /><div class="col-xs-12 col-md-8 col-md-offset-2">',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Menu 3', 'charlie-foxtrot' ),
		'id' => 'footer-menu3',
		'description' => esc_html__( 'Appears in the footer 3 area', 'charlie-foxtrot' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h3 class="text-center">',
		'after_title' => '</h3><hr /><div class="col-xs-12 col-md-8 col-md-offset-2">',
	) );

	// Define and register starter content to showcase the theme on new sites.
	$charlie_foxtrot_start = array(
		'top' => array(
			'name' => __('Top Menu','charlie-foxtrot'),
			'items' => array(
				'link_products',
				'page_about_us',
				'page_help',
				'page_contact_us',
				),
			),
		'sub' => array(
			'name' => __('Sub Menu','charlie-foxtrot'),
			'items' => array(
				'link_cart',
				'page_account',
				),
			),
		);
	$charlie_foxtrot_start = apply_filters( 'charlie_foxtrot_starter_content', $charlie_foxtrot_start );
	add_theme_support('starter-content', $charlie_foxtrot_start);

	// For custom search form.
	function charlie_foxtrot_search_form( $form ) {
	    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	    <div class="input-group w-search-form">
	    <input type="text" class="form-control" placeholder="Search" value="' . get_search_query() . '" name="s" id="s" />
	    <span class="input-group-btn">
	          <button class="btn w-search-button" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true">
	          </span></button>
	        </span>
	    </div>
	    </form>';
	 
	    return $form;
	}
	add_filter( 'get_search_form', 'charlie_foxtrot_search_form' );

	// WooCommerce Support.
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'charlie_foxtrot_setup' );

//WooCommerce Setup.
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

// Includes Walker Class
require get_parent_theme_file_path('/inc/charlie-foxtrot-walker.php');