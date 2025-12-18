<?php
/**
 * Template part for displaying the services/welcome section
 *
 * @package ASG_Live
 */

// Get ACF fields with fallbacks.
$asg_live_section_title    = asg_live_get_field( 'services_title', __( 'Welcome to ASG', 'asg-live' ), 'option' );
$asg_live_section_subtitle = asg_live_get_field( 'services_subtitle', __( 'Consistent results that separate us from the rest and raise the bar in patient care.', 'asg-live' ), 'option' );

// Service cards - can be repeater field or static.
$asg_live_service_cards = asg_live_get_field( 'service_cards', array(), 'option' );

// Default cards if ACF not set.
if ( empty( $asg_live_service_cards ) ) {
	$asg_live_service_cards = array(
		array(
			'icon'  => 'users',
			'title' => __( 'Career Opportunities', 'asg-live' ),
			'text'  => __( 'We encourage and invite you to consider a career with ASG. You\'ll enjoy a wonderful environment!', 'asg-live' ),
			'link'  => '/careers/',
			'label' => __( 'Apply Now', 'asg-live' ),
		),
		array(
			'icon'  => 'grid',
			'title' => __( 'About ASG', 'asg-live' ),
			'text'  => __( 'Industry-leading Certified Registered Nurse Anesthesiologists and proprietary anesthesia care model.', 'asg-live' ),
			'link'  => '/about/',
			'label' => __( 'Read More', 'asg-live' ),
		),
		array(
			'icon'  => 'map-pin',
			'title' => __( 'Our Locations', 'asg-live' ),
			'text'  => __( 'Our scalable support allows seamless integration into any office environment across the United States.', 'asg-live' ),
			'link'  => '/locations/',
			'label' => __( 'See Cities', 'asg-live' ),
		),
	);
}
?>

<section class="welcome-section">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title"><?php echo esc_html( $asg_live_section_title ); ?></h2>
			<p class="section-subtitle"><?php echo esc_html( $asg_live_section_subtitle ); ?></p>
		</div>

		<div class="services-grid">
			<?php foreach ( $asg_live_service_cards as $asg_live_card ) : ?>
				<div class="service-card">
					<div class="service-card-icon">
						<?php
						$asg_live_icon = isset( $asg_live_card['icon'] ) ? $asg_live_card['icon'] : 'grid';
						asg_live_icon( $asg_live_icon );
						?>
					</div>
					<h3 class="service-card-title"><?php echo esc_html( $asg_live_card['title'] ); ?></h3>
					<p class="service-card-text"><?php echo esc_html( $asg_live_card['text'] ); ?></p>
					<?php if ( ! empty( $asg_live_card['link'] ) && ! empty( $asg_live_card['label'] ) ) : ?>
						<a href="<?php echo esc_url( $asg_live_card['link'] ); ?>" class="service-card-link">
							<?php echo esc_html( $asg_live_card['label'] ); ?>
							<?php asg_live_icon( 'chevron-right' ); ?>
						</a>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
