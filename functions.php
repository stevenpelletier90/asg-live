<?php
/**
 * ASG Theme Functions
 *
 * @package ASG
 */

if ( ! defined( 'ASG_VERSION' ) ) {
	define( 'ASG_VERSION', '1.0.0' );
}

/**
 * Theme setup
 */
function asg_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
			'footer'  => 'Footer Menu',
		)
	);

	// Switch default core markup to HTML5.
	add_theme_support(
		'html5',
		array(
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

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
add_action( 'after_setup_theme', 'asg_setup' );

/**
 * Enqueue scripts and styles
 */
function asg_scripts() {
	// Font Awesome.
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
		array(),
		'6.5.1'
	);

	// Main stylesheet (required by WordPress).
	wp_enqueue_style( 'asg-style', get_stylesheet_uri(), array(), ASG_VERSION );

	// Theme styles (includes local @font-face declarations).
	wp_enqueue_style(
		'asg-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'asg-style', 'font-awesome' ),
		ASG_VERSION
	);

	// Theme scripts.
	wp_enqueue_script(
		'asg-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		ASG_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'asg_scripts' );

/**
 * ACF Options Page
 */
function asg_acf_options_page() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page(
			array(
				'page_title' => 'Theme Settings',
				'menu_title' => 'Theme Settings',
				'menu_slug'  => 'theme-settings',
				'capability' => 'edit_posts',
				'redirect'   => false,
				'icon_url'   => 'dashicons-admin-generic',
				'position'   => 59,
			)
		);
	}
}
add_action( 'acf/init', 'asg_acf_options_page' );

/**
 * Helper function to get ACF field with fallback
 *
 * @param string $field_name The ACF field name.
 * @param mixed  $fallback   Default value if field is empty.
 * @param mixed  $post_id    Post ID or 'option' for options page.
 * @return mixed
 */
function asg_get_field( $field_name, $fallback = '', $post_id = false ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $fallback;
	}

	$value = get_field( $field_name, $post_id );

	return ! empty( $value ) ? $value : $fallback;
}
