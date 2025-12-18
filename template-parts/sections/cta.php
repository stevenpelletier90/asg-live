<?php
/**
 * Template part for displaying the CTA section
 *
 * @package ASG_Live
 */

// Get ACF fields with fallbacks.
$asg_live_cta_title    = asg_live_get_field( 'cta_title', __( 'Call Us for a Consultation', 'asg-live' ), 'option' );
$asg_live_cta_subtitle = asg_live_get_field( 'cta_subtitle', __( 'We are excellent listeners and deeply learn your office needs.', 'asg-live' ), 'option' );
$asg_live_cta_btn_text = asg_live_get_field( 'cta_button_text', __( 'Contact Us Now', 'asg-live' ), 'option' );
$asg_live_cta_btn_link = asg_live_get_field( 'cta_button_link', '/contact/', 'option' );
$asg_live_cta_bg_image = asg_live_get_field( 'cta_background_image', '', 'option' );

$asg_live_bg_style = '';
if ( $asg_live_cta_bg_image ) {
	$asg_live_bg_style = 'background-image: url(' . esc_url( $asg_live_cta_bg_image['url'] ) . ');';
}
?>

<section class="cta-section" <?php echo $asg_live_bg_style ? 'style="' . esc_attr( $asg_live_bg_style ) . '"' : ''; ?>>
	<div class="cta-inner">
		<h2 class="section-title"><?php echo esc_html( $asg_live_cta_title ); ?></h2>
		<p class="section-subtitle"><?php echo esc_html( $asg_live_cta_subtitle ); ?></p>
		<?php if ( $asg_live_cta_btn_text && $asg_live_cta_btn_link ) : ?>
			<a href="<?php echo esc_url( $asg_live_cta_btn_link ); ?>" class="btn btn--primary btn--lg">
				<?php echo esc_html( $asg_live_cta_btn_text ); ?>
			</a>
		<?php endif; ?>
	</div>
</section>
