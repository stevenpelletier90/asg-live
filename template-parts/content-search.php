<?php
/**
 * Template part for displaying results in search pages
 *
 * @package ASG_Live
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
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

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry-footer">
		<?php
		if ( 'post' === get_post_type() ) :
			$asg_live_categories = get_the_category_list( ', ' );
			if ( $asg_live_categories ) :
				printf( '<span class="cat-links">%s</span>', wp_kses_post( $asg_live_categories ) );
			endif;
		endif;
		?>
	</footer>
</article>
