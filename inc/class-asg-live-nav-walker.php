<?php
/**
 * Custom Nav Walker for Primary Menu
 *
 * @package ASG_Live
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Custom Nav Walker class
 */
class ASG_Live_Nav_Walker extends Walker_Nav_Menu {
	/**
	 * Start element output.
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'nav-item';

		if ( in_array( 'current-menu-item', $classes, true ) ) {
			$classes[] = 'nav-item--active';
		}

		// Core WordPress filter - cannot be prefixed.
		$class_names = implode(
			' ',
			apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		);
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= $indent . '<li' . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';
		$atts['class']  = 'nav-link';

		if ( in_array( 'current-menu-item', $classes, true ) ) {
			$atts['class'] .= ' nav-link--active';
		}

		// Core WordPress filter - cannot be prefixed.
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		// Core WordPress filter - cannot be prefixed.
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->post_title, $item->ID ) . $args->link_after; // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		$item_output .= '</a>';
		$item_output .= $args->after;

		// Core WordPress filter - cannot be prefixed.
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
	}
}
