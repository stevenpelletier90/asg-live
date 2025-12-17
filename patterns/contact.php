<?php
/**
 * Title: Contact Section
 * Slug: asg-live/contact
 * Categories: featured, contact
 * Keywords: contact, form, info
 * Description: A contact section with information columns.
 *
 * @package ASG_Live
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Get In Touch', 'asg-live' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Have questions? We would love to hear from you.', 'asg-live' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"},"margin":{"top":"2rem"}}}} -->
	<div class="wp-block-columns" style="margin-top:2rem">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="border-radius:8px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size"><?php esc_html_e( 'Email', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"primary"} -->
				<p class="has-text-align-center has-primary-color has-text-color">hello@example.com</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="border-radius:8px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size"><?php esc_html_e( 'Phone', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"primary"} -->
				<p class="has-text-align-center has-primary-color has-text-color">(555) 123-4567</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-background-color has-background" style="border-radius:8px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size"><?php esc_html_e( 'Address', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"primary"} -->
				<p class="has-text-align-center has-primary-color has-text-color">123 Main St, City</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
