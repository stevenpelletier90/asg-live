<?php
/**
 * Template part for displaying single posts
 *
 * @package ASG_Live
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<span class="posted-on">
				<?php echo esc_html( get_the_date() ); ?>
			</span>
			<span class="byline">
				<?php esc_html_e( 'by', 'asg-live' ); ?> <?php the_author(); ?>
			</span>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'large' ); ?>
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

	<footer class="entry-footer">
		<?php
		$asg_live_categories = get_the_category_list( ', ' );
		if ( $asg_live_categories ) :
			printf( '<span class="cat-links">%s %s</span>', esc_html__( 'Posted in', 'asg-live' ), wp_kses_post( $asg_live_categories ) );
		endif;

		$asg_live_tags = get_the_tag_list( '', ', ' );
		if ( $asg_live_tags ) :
			printf( '<span class="tags-links">%s %s</span>', esc_html__( 'Tagged', 'asg-live' ), wp_kses_post( $asg_live_tags ) );
		endif;
		?>
	</footer>
</article>
