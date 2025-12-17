<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package ASG_Live
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'asg-live' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'asg-live' ); ?></p>

			<?php get_search_form(); ?>

			<div class="error-404-widgets">
				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'asg-live' ); ?></h2>
					<ul>
						<?php
						wp_list_categories(
							array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							)
						);
						?>
					</ul>
				</div>

				<?php
				$asg_live_archive_content = '<p>' . sprintf(
					/* translators: %1$s: smiley */
					esc_html__( 'Try looking in the monthly archives. %1$s', 'asg-live' ),
					convert_smilies( ':)' )
				) . '</p>';

				the_widget(
					'WP_Widget_Archives',
					array( 'dropdown' => 1 ),
					array( 'after_title' => '</h2>' . $asg_live_archive_content )
				);

				the_widget( 'WP_Widget_Tag_Cloud', array(), array() );
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
