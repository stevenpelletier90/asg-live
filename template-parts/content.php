<?php
/**
 * Template part for displaying posts
 *
 * @package ASG_Live
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<span class="posted-on">
					<?php echo esc_html( get_the_date() ); ?>
				</span>
				<span class="byline">
					<?php esc_html_e( 'by', 'asg-live' ); ?> <?php the_author(); ?>
				</span>
			</div>
		<?php endif; ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			the_content();
		else :
			the_excerpt();
		endif;

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
		if ( 'post' === get_post_type() ) :
			$asg_live_categories = get_the_category_list( ', ' );
			if ( $asg_live_categories ) :
				printf( '<span class="cat-links">%s</span>', wp_kses_post( $asg_live_categories ) );
			endif;

			$asg_live_tags = get_the_tag_list( '', ', ' );
			if ( $asg_live_tags ) :
				printf( '<span class="tags-links">%s</span>', wp_kses_post( $asg_live_tags ) );
			endif;
		endif;
		?>
	</footer>
</article>
