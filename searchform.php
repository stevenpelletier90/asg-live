<?php
/**
 * Template for displaying search forms
 *
 * @package ASG_Live
 */

$asg_live_unique_id  = wp_unique_id( 'search-form-' );
$asg_live_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>

<form role="search" <?php echo wp_kses_post( $asg_live_aria_label ); ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $asg_live_unique_id ); ?>">
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'asg-live' ); ?></span>
	</label>
	<input
		type="search"
		id="<?php echo esc_attr( $asg_live_unique_id ); ?>"
		class="search-field"
		placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'asg-live' ); ?>"
		value="<?php echo get_search_query(); ?>"
		name="s"
	/>
	<button type="submit" class="search-submit">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'asg-live' ); ?></span>
		<span aria-hidden="true"><?php esc_html_e( 'Search', 'asg-live' ); ?></span>
	</button>
</form>
