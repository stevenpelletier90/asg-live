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
 */
function asg_live_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'asg-live', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes.
	add_image_size( 'asg-hero', 800, 600, true );
	add_image_size( 'asg-card', 400, 300, true );
	add_image_size( 'asg-banner', 1920, 400, true );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'asg-live' ),
			'footer'  => esc_html__( 'Footer Menu', 'asg-live' ),
		)
	);

	// Switch default core markup to HTML5.
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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'asg_live_setup' );

/**
 * Set the content width
 */
function asg_live_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'asg_live_content_width', 1200 );
}
add_action( 'after_setup_theme', 'asg_live_content_width', 0 );

/**
 * Enqueue scripts and styles
 */
function asg_live_scripts() {
	// Google Fonts - Inter (external resource, version not applicable).
	wp_enqueue_style(
		'asg-live-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
		array(),
		ASG_LIVE_VERSION
	);

	// Main stylesheet (style.css).
	wp_enqueue_style( 'asg-live-style', get_stylesheet_uri(), array(), ASG_LIVE_VERSION );

	// Theme styles.
	wp_enqueue_style(
		'asg-live-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'asg-live-fonts' ),
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
 * ACF Field Registration.
 */
if ( file_exists( get_template_directory() . '/inc/acf-fields.php' ) ) {
	require get_template_directory() . '/inc/acf-fields.php';
}

/**
 * Custom Nav Walker.
 */
if ( file_exists( get_template_directory() . '/inc/class-asg-live-nav-walker.php' ) ) {
	require get_template_directory() . '/inc/class-asg-live-nav-walker.php';
}

/**
 * ACF Options Page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title' => __( 'Theme Settings', 'asg-live' ),
			'menu_title' => __( 'Theme Settings', 'asg-live' ),
			'menu_slug'  => 'theme-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
			'icon_url'   => 'dashicons-admin-customizer',
			'position'   => 2,
		)
	);
}

/**
 * Get ACF field with fallback
 *
 * @param string $field_name    ACF field name.
 * @param mixed  $default_value Default value if field is empty.
 * @param mixed  $post_id       Post ID or 'option' for options page.
 * @return mixed
 */
function asg_live_get_field( $field_name, $default_value = '', $post_id = false ) {
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $field_name, $post_id );
		return ! empty( $value ) ? $value : $default_value;
	}
	return $default_value;
}

/**
 * Display SVG icon
 *
 * @param string $icon_name Icon name.
 * @param string $css_class Additional CSS class.
 */
function asg_live_icon( $icon_name, $css_class = '' ) {
	$icons = array(
		'menu'          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>',
		'close'         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
		'phone'         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
		'email'         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>',
		'location'      => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
		'users'         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
		'grid'          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>',
		'map-pin'       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
		'arrow-right'   => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
		'chevron-left'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>',
		'chevron-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>',
	);

	if ( isset( $icons[ $icon_name ] ) ) {
		$svg_class = 'icon icon-' . esc_attr( $icon_name );
		if ( $css_class ) {
			$svg_class .= ' ' . esc_attr( $css_class );
		}
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- SVG is hardcoded above.
		echo str_replace( '<svg', '<svg class="' . esc_attr( $svg_class ) . '"', $icons[ $icon_name ] );
	}
}
