<?php
/**
 * Title: Features Grid
 * Slug: asg-live/features
 * Categories: featured, services
 * Keywords: features, services, grid, columns
 * Description: A three-column features or services grid.
 *
 * @package ASG_Live
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Our Features', 'asg-live' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Everything you need to succeed, all in one place.', 'asg-live' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="border-radius:8px;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e( 'Fast Performance', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
				<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Lightning-fast load times and optimized code ensure the best user experience.', 'asg-live' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="border-radius:8px;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e( 'Easy to Use', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
				<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Intuitive interface designed for everyone, from beginners to experts.', 'asg-live' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="border-radius:8px;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e( 'Secure & Reliable', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
				<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Enterprise-grade security with 99.9% uptime guarantee.', 'asg-live' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
