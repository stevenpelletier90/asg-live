<?php
/**
 * Title: Testimonial
 * Slug: asg-live/testimonial
 * Categories: testimonials
 * Keywords: testimonial, quote, review
 * Description: A testimonial block with quote and attribution.
 *
 * @package ASG_Live
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"2rem","right":"2rem"}},"border":{"radius":"8px","left":{"color":"var:preset|color|primary","width":"4px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:8px;border-left-color:var(--wp--preset--color--primary);border-left-width:4px;padding-top:3rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontSize":"1.25rem"}},"textColor":"foreground"} -->
	<p class="has-foreground-color has-text-color" style="font-size:1.25rem;font-style:italic"><?php esc_html_e( '"This product has completely transformed how we work. The team is more productive than ever, and our customers are happier. Highly recommended!"', 'asg-live' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"foreground"} -->
		<p class="has-foreground-color has-text-color" style="font-weight:600"><?php esc_html_e( 'Jane Smith', 'asg-live' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php esc_html_e( '— CEO, Example Company', 'asg-live' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
