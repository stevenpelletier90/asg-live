<?php
/**
 * Template part for displaying the hero section
 *
 * @package ASG_Live
 */

// Get ACF fields with fallbacks.
$asg_live_hero_title    = asg_live_get_field( 'hero_title', __( 'Providing Anesthesia Services', 'asg-live' ), 'option' );
$asg_live_hero_subtitle = asg_live_get_field( 'hero_subtitle', __( 'Your comprehensive anesthesia partner', 'asg-live' ), 'option' );
$asg_live_hero_image    = asg_live_get_field( 'hero_image', '', 'option' );

$asg_live_btn1_text = asg_live_get_field( 'hero_button_1_text', __( 'Services', 'asg-live' ), 'option' );
$asg_live_btn1_link = asg_live_get_field( 'hero_button_1_link', '/services/', 'option' );
$asg_live_btn2_text = asg_live_get_field( 'hero_button_2_text', __( 'Careers', 'asg-live' ), 'option' );
$asg_live_btn2_link = asg_live_get_field( 'hero_button_2_link', '/careers/', 'option' );
?>

<section class="hero">
	<!-- Decorations -->
	<div class="hero-decoration hero-decoration--1"></div>
	<div class="hero-decoration hero-decoration--2"></div>
	<div class="hero-decoration hero-decoration--3"></div>

	<div class="hero-inner">
		<div class="hero-content">
			<h1 class="hero-title"><?php echo esc_html( $asg_live_hero_title ); ?></h1>
			<p class="hero-subtitle"><?php echo esc_html( $asg_live_hero_subtitle ); ?></p>
			<div class="hero-buttons">
				<?php if ( $asg_live_btn1_text && $asg_live_btn1_link ) : ?>
					<a href="<?php echo esc_url( $asg_live_btn1_link ); ?>" class="btn btn--secondary">
						<?php echo esc_html( $asg_live_btn1_text ); ?>
					</a>
				<?php endif; ?>
				<?php if ( $asg_live_btn2_text && $asg_live_btn2_link ) : ?>
					<a href="<?php echo esc_url( $asg_live_btn2_link ); ?>" class="btn btn--primary">
						<?php echo esc_html( $asg_live_btn2_text ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<div class="hero-image">
			<?php if ( $asg_live_hero_image ) : ?>
				<img src="<?php echo esc_url( $asg_live_hero_image['url'] ); ?>" alt="<?php echo esc_attr( $asg_live_hero_image['alt'] ); ?>">
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-placeholder.jpg' ); ?>" alt="<?php esc_attr_e( 'Anesthesia Services', 'asg-live' ); ?>">
			<?php endif; ?>
		</div>
	</div>

	<!-- Wave Shape -->
	<div class="hero-wave">
		<svg viewBox="0 0 1440 150" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
			<path d="M0 64L48 80C96 96 192 128 288 128C384 128 480 96 576 90.7C672 85 768 107 864 112C960 117 1056 107 1152 90.7C1248 75 1344 53 1392 42.7L1440 32V150H1392C1344 150 1248 150 1152 150C1056 150 960 150 864 150C768 150 672 150 576 150C480 150 384 150 288 150C192 150 96 150 48 150H0V64Z" fill="#ffffff"/>
		</svg>
	</div>
</section>
