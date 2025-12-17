<?php
/**
 * ASG Live Theme Functions
 *
 * @package ASG_Live
 */

if ( ! defined( 'ASG_LIVE_VERSION' ) ) {
	define( 'ASG_LIVE_VERSION', '1.0.0' );
}

/**
 * Theme setup
 *
 * Sets up theme defaults and registers support for various WordPress features.
 * This function is hooked into the after_setup_theme hook, which runs before the
 * init hook. The init hook is too late for some features, such as indicating
 * support for post thumbnails.
 */
function asg_live_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'asg-live', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'asg-live' ),
			'footer'  => esc_html__( 'Footer Menu', 'asg-live' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'asg_live_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'asg_live_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function asg_live_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'asg_live_content_width', 800 );
}
add_action( 'after_setup_theme', 'asg_live_content_width', 0 );

/**
 * Enqueue scripts and styles
 */
function asg_live_scripts() {
	// Main stylesheet (style.css).
	wp_enqueue_style( 'asg-live-style', get_stylesheet_uri(), array(), ASG_LIVE_VERSION );

	// Theme styles.
	wp_enqueue_style(
		'asg-live-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		ASG_LIVE_VERSION
	);

	// Theme scripts.
	wp_enqueue_script(
		'asg-live-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		ASG_LIVE_VERSION,
		true
	);

	wp_enqueue_script(
		'asg-live-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		ASG_LIVE_VERSION,
		true
	);

	// Threaded comments reply script.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'asg_live_scripts' );

/**
 * Register widget areas
 */
function asg_live_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'asg-live' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'asg-live' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget Area', 'asg-live' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer widgets here.', 'asg-live' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'asg_live_widgets_init' );

/**
 * Custom template tags for this theme.
 */
if ( file_exists( get_template_directory() . '/inc/template-tags.php' ) ) {
	require get_template_directory() . '/inc/template-tags.php';
}

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
if ( file_exists( get_template_directory() . '/inc/template-functions.php' ) ) {
	require get_template_directory() . '/inc/template-functions.php';
}

/**
 * Customizer additions.
 */
if ( file_exists( get_template_directory() . '/inc/customizer.php' ) ) {
	require get_template_directory() . '/inc/customizer.php';
}

/**
 * Register block pattern categories.
 */
function asg_live_register_block_pattern_categories() {
	register_block_pattern_category(
		'asg-live',
		array(
			'label' => esc_html__( 'ASG Live', 'asg-live' ),
		)
	);
}
add_action( 'init', 'asg_live_register_block_pattern_categories' );

/**
 * Register block patterns.
 *
 * Patterns are automatically registered from the /patterns directory
 * when using WordPress 6.0+. For older versions, we register them manually.
 */
function asg_live_register_block_patterns() {
	// WordPress 6.0+ automatically registers patterns from /patterns directory.
	// This function is here for backwards compatibility with older versions.
	if ( version_compare( get_bloginfo( 'version' ), '6.0', '<' ) ) {
		$patterns_dir = get_template_directory() . '/patterns/';

		if ( is_dir( $patterns_dir ) ) {
			$pattern_files = glob( $patterns_dir . '*.php' );

			foreach ( $pattern_files as $pattern_file ) {
				// Get pattern metadata from file header.
				$pattern_data = get_file_data(
					$pattern_file,
					array(
						'title'       => 'Title',
						'slug'        => 'Slug',
						'categories'  => 'Categories',
						'keywords'    => 'Keywords',
						'description' => 'Description',
					)
				);

				if ( empty( $pattern_data['slug'] ) ) {
					continue;
				}

				ob_start();
				include $pattern_file;
				$content = ob_get_clean();

				$categories = ! empty( $pattern_data['categories'] )
					? array_map( 'trim', explode( ',', $pattern_data['categories'] ) )
					: array();

				$keywords = ! empty( $pattern_data['keywords'] )
					? array_map( 'trim', explode( ',', $pattern_data['keywords'] ) )
					: array();

				register_block_pattern(
					$pattern_data['slug'],
					array(
						'title'       => $pattern_data['title'],
						'description' => $pattern_data['description'],
						'content'     => $content,
						'categories'  => $categories,
						'keywords'    => $keywords,
					)
				);
			}
		}
	}
}
add_action( 'init', 'asg_live_register_block_patterns' );
