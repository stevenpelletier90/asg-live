<?php
/**
 * Title: Homepage
 * Slug: asg-live/homepage
 * Categories: featured, asg-live
 * Keywords: home, homepage, front page, landing
 * Description: A complete homepage layout with hero, features, and CTA sections.
 * Block Types: core/post-content
 *
 * @package ASG_Live
 */
?>
<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":600,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:600px">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"700"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:3.5rem;font-weight:700"><?php esc_html_e( 'Welcome to Our Site', 'asg-live' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"}},"textColor":"background"} -->
			<p class="has-text-align-center has-background-color has-text-color" style="font-size:1.25rem"><?php esc_html_e( 'We create amazing experiences. Discover what makes us different and why thousands of customers trust us.', 'asg-live' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2rem">
				<!-- wp:button {"backgroundColor":"primary","textColor":"background","style":{"border":{"radius":"4px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( 'Get Started', 'asg-live' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"background","textColor":"secondary","style":{"border":{"radius":"4px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( 'Learn More', 'asg-live' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Why Choose Us', 'asg-live' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Here\'s what sets us apart from the competition.', 'asg-live' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"},"margin":{"top":"3rem"}}}} -->
	<div class="wp-block-columns" style="margin-top:3rem">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-radius:8px;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"primary"} -->
				<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:1.5rem"><?php esc_html_e( 'Expert Team', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
				<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Our experienced professionals bring years of expertise to every project we undertake.', 'asg-live' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-radius:8px;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"primary"} -->
				<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:1.5rem"><?php esc_html_e( 'Quality First', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
				<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'We never compromise on quality. Every detail matters and we make sure it\'s perfect.', 'asg-live' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"primary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:1px;border-radius:8px;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"primary"} -->
				<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:1.5rem"><?php esc_html_e( '24/7 Support', 'asg-live' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
				<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Our dedicated support team is always available to help you whenever you need it.', 'asg-live' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"2rem","right":"2rem"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">
	<!-- wp:heading {"textAlign":"center","textColor":"background"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Ready to Get Started?', 'asg-live' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Join thousands of satisfied customers today. Start your journey with us.', 'asg-live' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem">
		<!-- wp:button {"backgroundColor":"background","textColor":"accent","style":{"border":{"radius":"4px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( 'Contact Us Today', 'asg-live' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Latest News', 'asg-live' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Stay up to date with our latest articles and updates.', 'asg-live' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
	<div class="wp-block-query" style="margin-top:3rem">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem","left":"0","right":"0"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:1.5rem;padding-left:0">
				<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"8px"}}} /-->
				<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.25rem"}},"textColor":"foreground"} /-->
				<!-- wp:post-excerpt {"moreText":"","excerptLength":15,"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"muted"} /-->
				<!-- wp:post-date {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"muted"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
