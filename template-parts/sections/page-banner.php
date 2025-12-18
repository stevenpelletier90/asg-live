<?php
/**
 * Template part for displaying the page banner on inner pages
 *
 * @package ASG_Live
 */

// Get page-specific fields or fallback to page title.
$asg_live_banner_title    = asg_live_get_field( 'page_banner_title', get_the_title() );
$asg_live_banner_subtitle = asg_live_get_field( 'page_banner_subtitle', '' );
$asg_live_banner_image    = asg_live_get_field( 'page_banner_image', '' );

$asg_live_bg_style = '';
if ( $asg_live_banner_image ) {
	$asg_live_bg_style = 'background-image: url(' . esc_url( $asg_live_banner_image['url'] ) . ');';
}
?>

<section class="page-banner" <?php echo $asg_live_bg_style ? 'style="' . esc_attr( $asg_live_bg_style ) . '"' : ''; ?>>
	<div class="page-banner-content">
		<div class="container">
			<h1 class="page-banner-title"><?php echo esc_html( $asg_live_banner_title ); ?></h1>
			<?php if ( $asg_live_banner_subtitle ) : ?>
				<p class="page-banner-subtitle"><?php echo esc_html( $asg_live_banner_subtitle ); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<!-- Wave Shape -->
	<div class="page-banner-wave">
		<svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
			<path d="M0 50L60 45.8C120 41.7 240 33.3 360 37.5C480 41.7 600 58.3 720 62.5C840 66.7 960 58.3 1080 50C1200 41.7 1320 33.3 1380 29.2L1440 25V100H1380C1320 100 1200 100 1080 100C960 100 840 100 720 100C600 100 480 100 360 100C240 100 120 100 60 100H0V50Z" fill="#ffffff"/>
		</svg>
	</div>
</section>
