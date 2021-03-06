
<?php
/**
 * ABwp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ABwp
 */


if ( ! function_exists( 'abwp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function abwp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on abwp, use a find and replace
		 * to change 'abwp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'abwp', get_template_directory() . '/languages' );

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
			'primary' => ('Main Menu'),
			'footer' => ('Footer Menu'),
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
		add_theme_support( 'custom-background', apply_filters( 'abwp_custom_background_args', array(
			'default-color' => 'BDC3C7',
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
			'height'      => 75,
			'width'       => 75,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'abwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abwp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'abwp_content_width', 640 );
}
add_action( 'after_setup_theme', 'abwp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function abwp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'abwp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'abwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer-4',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'abwp_widgets_init' );

function ab_init() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );	 
}

add_action( ' after_setup_theme ', ' ab_init ' );
 
/**
 * projects custom post type.
 */
 
function project_custom_post_init() {
	$labels = array( 
				'name' => 'Tutorials',
				'singular_name' => 'Tutorial',
				'add_new_item' => 'Add New Tutorial',
				'edit_item' => 'Edit Tutorial'
			);
	$args = array(
			'labels' => $labels,
			'menu_icon' => 'dashicons-clipboard',
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','thumbnail','editor','excerpt','comments'),
		);
	register_post_type( 'tutorial', $args );
	
}
add_action( 'init','project_custom_post_init' );

/**
 * Enqueue scripts and styles.
 */
function abwp_scripts() {

	wp_enqueue_style( 'assets', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'assets', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
	wp_enqueue_script( 'assets', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'abwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	
}
add_action( 'wp_enqueue_scripts', 'abwp_scripts' );

//Output Customize css

function abwp_customize_css() { ?>

	<style type="text/css">
	  footer {
		background: <?php echo get_theme_mod('abwp_nav_color'); ?>;
	  }
	  nav {
		background: <?php echo get_theme_mod('abwp_nav_color'); ?>;
	  }
	  #sidebar {
		  background: <?php echo get_theme_mod('abwp_sidebar_color'); ?>;
	  }
	  nav a {
		  color: <?php echo get_theme_mod('abwp_link_color'); ?>;
	  }
  
	  a:link {
		  color: <?php echo get_theme_mod('abwp_link_color'); ?>;
	  }
  
	  .btn-readmore:hover {
		  background: <?php echo get_theme_mod('abwp_btn_color'); ?>;
	  }
	</style>
  
  <?php }
  
  add_action('wp_head', 'abwp_customize_css');

// Search Filters

function search_filter($query) {
	if ($query->is_search()) {
		$query->set('post_type',array('post', 'tutorial'));
	}
}

add_filter('pre_get_posts', 'search_filter');

function register_navwalker(){
	require_once get_template_directory() . '/navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// Customizer File
require get_template_directory(). '/inc/customizer.php';

