<?php
/**
 * ACF Field Registration
 *
 * Register custom fields for the theme.
 * These fields will be available in the Theme Settings page.
 *
 * @package ASG_Live
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register ACF fields
 */
function asg_live_register_acf_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// Theme Settings - Header.
	acf_add_local_field_group(
		array(
			'key'        => 'group_theme_header',
			'title'      => __( 'Header Settings', 'asg-live' ),
			'fields'     => array(
				array(
					'key'           => 'field_header_cta_text',
					'label'         => __( 'CTA Button Text', 'asg-live' ),
					'name'          => 'header_cta_text',
					'type'          => 'text',
					'default_value' => __( 'Contact Us', 'asg-live' ),
				),
				array(
					'key'           => 'field_header_cta_link',
					'label'         => __( 'CTA Button Link', 'asg-live' ),
					'name'          => 'header_cta_link',
					'type'          => 'url',
					'default_value' => '/contact/',
				),
			),
			'location'   => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-settings',
					),
				),
			),
			'menu_order' => 0,
		)
	);

	// Theme Settings - Hero Section.
	acf_add_local_field_group(
		array(
			'key'        => 'group_theme_hero',
			'title'      => __( 'Hero Section', 'asg-live' ),
			'fields'     => array(
				array(
					'key'           => 'field_hero_title',
					'label'         => __( 'Title', 'asg-live' ),
					'name'          => 'hero_title',
					'type'          => 'text',
					'default_value' => __( 'Providing Anesthesia Services', 'asg-live' ),
				),
				array(
					'key'           => 'field_hero_subtitle',
					'label'         => __( 'Subtitle', 'asg-live' ),
					'name'          => 'hero_subtitle',
					'type'          => 'text',
					'default_value' => __( 'Your comprehensive anesthesia partner', 'asg-live' ),
				),
				array(
					'key'           => 'field_hero_image',
					'label'         => __( 'Hero Image', 'asg-live' ),
					'name'          => 'hero_image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
				),
				array(
					'key'           => 'field_hero_button_1_text',
					'label'         => __( 'Button 1 Text', 'asg-live' ),
					'name'          => 'hero_button_1_text',
					'type'          => 'text',
					'default_value' => __( 'Services', 'asg-live' ),
				),
				array(
					'key'           => 'field_hero_button_1_link',
					'label'         => __( 'Button 1 Link', 'asg-live' ),
					'name'          => 'hero_button_1_link',
					'type'          => 'url',
					'default_value' => '/services/',
				),
				array(
					'key'           => 'field_hero_button_2_text',
					'label'         => __( 'Button 2 Text', 'asg-live' ),
					'name'          => 'hero_button_2_text',
					'type'          => 'text',
					'default_value' => __( 'Careers', 'asg-live' ),
				),
				array(
					'key'           => 'field_hero_button_2_link',
					'label'         => __( 'Button 2 Link', 'asg-live' ),
					'name'          => 'hero_button_2_link',
					'type'          => 'url',
					'default_value' => '/careers/',
				),
			),
			'location'   => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-settings',
					),
				),
			),
			'menu_order' => 1,
		)
	);

	// Theme Settings - Welcome/Services Section.
	acf_add_local_field_group(
		array(
			'key'        => 'group_theme_services',
			'title'      => __( 'Welcome Section', 'asg-live' ),
			'fields'     => array(
				array(
					'key'           => 'field_services_title',
					'label'         => __( 'Section Title', 'asg-live' ),
					'name'          => 'services_title',
					'type'          => 'text',
					'default_value' => __( 'Welcome to ASG', 'asg-live' ),
				),
				array(
					'key'           => 'field_services_subtitle',
					'label'         => __( 'Section Subtitle', 'asg-live' ),
					'name'          => 'services_subtitle',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => __( 'Consistent results that separate us from the rest and raise the bar in patient care.', 'asg-live' ),
				),
			),
			'location'   => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-settings',
					),
				),
			),
			'menu_order' => 2,
		)
	);

	// Theme Settings - CTA Section.
	acf_add_local_field_group(
		array(
			'key'        => 'group_theme_cta',
			'title'      => __( 'CTA Section', 'asg-live' ),
			'fields'     => array(
				array(
					'key'           => 'field_cta_title',
					'label'         => __( 'Title', 'asg-live' ),
					'name'          => 'cta_title',
					'type'          => 'text',
					'default_value' => __( 'Call Us for a Consultation', 'asg-live' ),
				),
				array(
					'key'           => 'field_cta_subtitle',
					'label'         => __( 'Subtitle', 'asg-live' ),
					'name'          => 'cta_subtitle',
					'type'          => 'text',
					'default_value' => __( 'We are excellent listeners and deeply learn your office needs.', 'asg-live' ),
				),
				array(
					'key'           => 'field_cta_button_text',
					'label'         => __( 'Button Text', 'asg-live' ),
					'name'          => 'cta_button_text',
					'type'          => 'text',
					'default_value' => __( 'Contact Us Now', 'asg-live' ),
				),
				array(
					'key'           => 'field_cta_button_link',
					'label'         => __( 'Button Link', 'asg-live' ),
					'name'          => 'cta_button_link',
					'type'          => 'url',
					'default_value' => '/contact/',
				),
				array(
					'key'           => 'field_cta_background_image',
					'label'         => __( 'Background Image', 'asg-live' ),
					'name'          => 'cta_background_image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
				),
			),
			'location'   => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-settings',
					),
				),
			),
			'menu_order' => 3,
		)
	);

	// Theme Settings - Footer.
	acf_add_local_field_group(
		array(
			'key'        => 'group_theme_footer',
			'title'      => __( 'Footer Settings', 'asg-live' ),
			'fields'     => array(
				array(
					'key'           => 'field_footer_logo',
					'label'         => __( 'Footer Logo', 'asg-live' ),
					'name'          => 'footer_logo',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'instructions'  => __( 'Upload a logo for the footer. Leave empty to use the site logo.', 'asg-live' ),
				),
				array(
					'key'          => 'field_copyright_text',
					'label'        => __( 'Copyright Text', 'asg-live' ),
					'name'         => 'copyright_text',
					'type'         => 'text',
					'instructions' => __( 'Custom copyright text. Leave empty for default.', 'asg-live' ),
				),
			),
			'location'   => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-settings',
					),
				),
			),
			'menu_order' => 4,
		)
	);

	// Page Banner Fields (for individual pages).
	acf_add_local_field_group(
		array(
			'key'        => 'group_page_banner',
			'title'      => __( 'Page Banner', 'asg-live' ),
			'fields'     => array(
				array(
					'key'          => 'field_page_banner_title',
					'label'        => __( 'Banner Title', 'asg-live' ),
					'name'         => 'page_banner_title',
					'type'         => 'text',
					'instructions' => __( 'Leave empty to use the page title.', 'asg-live' ),
				),
				array(
					'key'   => 'field_page_banner_subtitle',
					'label' => __( 'Banner Subtitle', 'asg-live' ),
					'name'  => 'page_banner_subtitle',
					'type'  => 'text',
				),
				array(
					'key'           => 'field_page_banner_image',
					'label'         => __( 'Banner Background Image', 'asg-live' ),
					'name'          => 'page_banner_image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
				),
			),
			'location'   => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'page',
					),
				),
			),
			'position'   => 'normal',
			'menu_order' => 0,
		)
	);
}
add_action( 'acf/init', 'asg_live_register_acf_fields' );
