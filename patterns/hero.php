<?php
/**
 * Title: Hero Section
 * Slug: asg-live/hero
 * Categories: featured, banner
 * Keywords: hero, banner, header, intro
 * Description: A full-width hero section with heading, text, and buttons.
 *
 * @package ASG_Live
 */
?>
<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":500,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:500px">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3rem"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:3rem"><?php esc_html_e( 'Welcome to Our Site', 'asg-live' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
			<p class="has-text-align-center has-background-color has-text-color has-large-font-size"><?php esc_html_e( 'Create something amazing with our platform. Start your journey today.', 'asg-live' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get Started', 'asg-live' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'asg-live' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
