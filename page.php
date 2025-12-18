<?php
/**
 * The template for displaying pages
 *
 * @package ASG_Live
 */

get_header();
?>

<?php
// Page Banner.
get_template_part( 'template-parts/sections/page-banner' );
?>

<main id="primary" class="site-main">
	<section class="page-content">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'asg-live' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>
				</article>
				<?php

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile;
			?>
		</div>
	</section>
</main>

<?php
get_footer();
