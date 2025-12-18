<?php
/**
 * The front page template file
 *
 * This template is used when a static front page is set,
 * or as a fallback when no front page is configured.
 *
 * @package ASG_Live
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	// Hero Section.
	get_template_part( 'template-parts/sections/hero' );

	// Welcome/Services Section.
	get_template_part( 'template-parts/sections/services' );

	// CTA Section.
	get_template_part( 'template-parts/sections/cta' );

	// If there's page content from the editor, display it.
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			$asg_live_content = get_the_content();
			if ( ! empty( trim( $asg_live_content ) ) ) :
				?>
				<section class="page-content">
					<div class="container">
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</section>
				<?php
			endif;
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();
