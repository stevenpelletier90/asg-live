<?php
/**
 * Template Name: Full Width
 * Template Post Type: page, post
 *
 * A full-width template without sidebar.
 *
 * @package ASG_Live
 */

get_header();
?>

<main id="primary" class="site-main site-main--full-width">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail post-thumbnail--full">
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
			<?php endif; ?>

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
</main>

<?php
get_footer();
