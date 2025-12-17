<?php
/**
 * Title: Call to Action
 * Slug: asg-live/cta
 * Categories: featured, call-to-action
 * Keywords: cta, call to action, button
 * Description: A call to action section with heading and button.
 *
 * @package ASG_Live
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">
	<!-- wp:heading {"textAlign":"center","textColor":"background"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Ready to Get Started?', 'asg-live' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Join thousands of satisfied customers. Sign up today and see the difference.', 'asg-live' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Sign Up Now', 'asg-live' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
