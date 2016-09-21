<?php 

	if ( ! function_exists( 'theme_setup' ) ) :
		function theme_setup() {
			/*
			 * Make theme available for translation.
			 * Translations can be filed in the /languages/ directory.
			 * If you're building a theme based on Twenty Sixteen, use a find and replace
			 * to change 'nhienphan' to the name of your theme in all the template files
			 */
			load_theme_textdomain( 'nhienphan', get_template_directory() . '/languages' );

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
			 * Enable support for custom logo.
			 *
			 *  @since Twenty Sixteen 1.2
			 */
			add_theme_support( 'custom-logo', array(
				'height'      => 162,
				'width'       => 98,
				'flex-height' => true,
			) );

			/*
			 * Enable support for Post Thumbnails on posts and pages.
			 *
			 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
			 */
			add_theme_support( 'post-thumbnails' );
			set_post_thumbnail_size( 1200, 9999 );

			// This theme uses wp_nav_menu() in two locations.
			register_nav_menus( array(
				'primary' => __( 'Primary Menu', 'nhienphan' ),
				'social'  => __( 'Social Links Menu', 'nhienphan' ),
				'footer1'  => __( 'Footer Menu Column 1 ', 'nhienphan' ),
				'footer2'  => __( 'Footer Menu Column 2', 'nhienphan' ),
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
				'status',
				'audio',
				'chat',
			) );

			/*
			 * This theme styles the visual editor to resemble the theme style,
			 * specifically font, colors, icons, and column width.
			 */
			//add_editor_style( array( 'css/editor-style.css', nhienphan_fonts_url() ) );

			// Indicate widget sidebars can use selective refresh in the Customizer.
			add_theme_support( 'customize-selective-refresh-widgets' );
		}

	endif;
	add_action( 'after_setup_theme', 'theme_setup' );
	/**
	 * Enqueues scripts and styles.
	 *
	 * @since Twenty Sixteen 1.0
	 */
	function twentysixteen_scripts() {
		

		wp_enqueue_style( 'bootstrap4', get_template_directory_uri() . '/plugins/bootstrap4/dist/css/bootstrap.css',array());
		wp_enqueue_script( 'bootstrap4-js', get_template_directory_uri() . '/plugins/bootstrap4/dist/js/bootstrap.js', array(), null, true);
		// Theme stylesheet.
		wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

		// Load the Internet Explorer specific stylesheet.
		wp_enqueue_style( 'theme-ie', get_template_directory_uri() . '/css/ie.css', array( 'theme-style' ), '20160412' );
		wp_style_add_data( 'theme-ie', 'conditional', 'lt IE 10' );

		// Load the Internet Explorer 8 specific stylesheet.
		wp_enqueue_style( 'theme-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'theme-style' ), '20160412' );
		wp_style_add_data( 'theme-ie8', 'conditional', 'lt IE 9' );

		// Load the Internet Explorer 7 specific stylesheet.
		wp_enqueue_style( 'theme-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'theme-style' ), '20160412' );
		wp_style_add_data( 'theme-ie7', 'conditional', 'lt IE 8' );

		// Load the html5 shiv.
		wp_enqueue_script( 'theme-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
		wp_script_add_data( 'theme-html5', 'conditional', 'lt IE 9' );

		wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );


	}
	add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

	function theme_widgets_init() {


		register_sidebar( array(

			'name'          => __( 'Sidebar', 'nhienphan' ),

			'id'            => 'sidebar',

			'description'   => __( 'Sidebar.', 'nhienphan' ),

			'before_widget' => '<aside id="%1$s" class="collection widget %2$s">',

			'after_widget'  => '</aside>',

			'before_title'  => '<h3 class="widget-sidebar-title">',

			'after_title'   => '</h3>',

		) );



		

		register_sidebar( array(

			'name'          => __( 'Footer Widget Area 1', 'nhienphan' ),

			'id'            => 'widget-footer1',

			'description'   => __( '', 'nhienphan' ),

			'before_widget' => '<aside id="%1$s" class="widget  %2$s menu-footer-block">',

			'after_widget'  => '</aside>',

			'before_title'  => '<h4 class="widget-footer-title">',

			'after_title'   => '</h4>',

		) );

		register_sidebar( array(

			'name'          => __( 'Footer Widget Area 2', 'nhienphan' ),

			'id'            => 'widget-footer2',

			'description'   => __( '', 'nhienphan' ),

			'before_widget' => '<aside id="%1$s" class="widget  %2$s menu-footer-block">',

			'after_widget'  => '</aside>',

			'before_title'  => '<h4 class="widget-footer-title">',

			'after_title'   => '</h4>',

		) );

		register_sidebar( array(

			'name'          => __( 'Footer Widget Area 3', 'nhienphan' ),

			'id'            => 'widget-footer3',

			'description'   => __( '', 'nhienphan' ),

			'before_widget' => '<aside id="%1$s" class="widget  %2$s">',

			'after_widget'  => '</aside>',

			'before_title'  => '<h4 class="widget-footer-title">',

			'after_title'   => '</h4>',

		) );



		
	}

	add_action( 'widgets_init', 'theme_widgets_init' );

	function theme_wp_title( $title, $sep ) {

	global $paged, $page;


	if ( is_feed() ) {

		return $title;

	}


	// Add the site name.

	$title .= get_bloginfo( 'name', 'display' );



	// Add the site description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) ) {

		$title = "$title $sep $site_description";

	}



	// Add a page number if necessary.

	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {

		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );

	}



	return $title;

}

add_filter( 'wp_title', 'theme_wp_title', 10, 2 );
include(TEMPLATEPATH.'/core/core.php');
