<?php
/**
 * The front page template file
 *
 * This template is used when a static front page is set in Settings > Reading,
 * or as a fallback when no front page is configured.
 *
 * @package ASG_Live
 */

get_header();
?>

<main id="primary" class="site-main site-main--front-page">
	<?php
	if ( have_posts() ) :
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
		endwhile;
	else :
		// If no content exists, show a default homepage layout.
		?>
		<section class="front-page-default">
			<!-- Hero Section -->
			<div class="front-page-hero">
				<div class="front-page-hero__content">
					<h1 class="front-page-hero__title"><?php bloginfo( 'name' ); ?></h1>
					<?php
					$asg_live_description = get_bloginfo( 'description', 'display' );
					if ( $asg_live_description ) :
						?>
						<p class="front-page-hero__description"><?php echo esc_html( $asg_live_description ); ?></p>
					<?php endif; ?>
					<div class="front-page-hero__buttons">
						<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="button button--primary">
							<?php esc_html_e( 'Read Blog', 'asg-live' ); ?>
						</a>
						<a href="#about" class="button button--outline">
							<?php esc_html_e( 'Learn More', 'asg-live' ); ?>
						</a>
					</div>
				</div>
			</div>

			<!-- Features Section -->
			<div id="about" class="front-page-features">
				<div class="front-page-features__inner">
					<h2 class="front-page-features__title"><?php esc_html_e( 'What We Offer', 'asg-live' ); ?></h2>
					<div class="front-page-features__grid">
						<div class="feature-card">
							<h3 class="feature-card__title"><?php esc_html_e( 'Quality Content', 'asg-live' ); ?></h3>
							<p class="feature-card__text"><?php esc_html_e( 'We deliver high-quality, well-researched content that provides real value to our readers.', 'asg-live' ); ?></p>
						</div>
						<div class="feature-card">
							<h3 class="feature-card__title"><?php esc_html_e( 'Regular Updates', 'asg-live' ); ?></h3>
							<p class="feature-card__text"><?php esc_html_e( 'Stay informed with our regular updates and fresh perspectives on topics that matter.', 'asg-live' ); ?></p>
						</div>
						<div class="feature-card">
							<h3 class="feature-card__title"><?php esc_html_e( 'Community Driven', 'asg-live' ); ?></h3>
							<p class="feature-card__text"><?php esc_html_e( 'Join our growing community and be part of meaningful conversations.', 'asg-live' ); ?></p>
						</div>
					</div>
				</div>
			</div>

			<!-- Recent Posts Section -->
			<div class="front-page-posts">
				<div class="front-page-posts__inner">
					<h2 class="front-page-posts__title"><?php esc_html_e( 'Latest Posts', 'asg-live' ); ?></h2>
					<div class="front-page-posts__grid">
						<?php
						$asg_live_recent_posts = new WP_Query(
							array(
								'posts_per_page'      => 3,
								'post_status'         => 'publish',
								'ignore_sticky_posts' => true,
							)
						);

						if ( $asg_live_recent_posts->have_posts() ) :
							while ( $asg_live_recent_posts->have_posts() ) :
								$asg_live_recent_posts->the_post();
								?>
								<article class="post-card">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" class="post-card__thumbnail">
											<?php the_post_thumbnail( 'medium_large' ); ?>
										</a>
									<?php endif; ?>
									<div class="post-card__content">
										<h3 class="post-card__title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
										<p class="post-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
										<span class="post-card__date"><?php echo get_the_date(); ?></span>
									</div>
								</article>
								<?php
							endwhile;
							wp_reset_postdata();
						else :
							?>
							<p><?php esc_html_e( 'No posts yet. Check back soon!', 'asg-live' ); ?></p>
						<?php endif; ?>
					</div>
					<?php if ( $asg_live_recent_posts->have_posts() ) : ?>
						<div class="front-page-posts__more">
							<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="button button--primary">
								<?php esc_html_e( 'View All Posts', 'asg-live' ); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<!-- CTA Section -->
			<div class="front-page-cta">
				<div class="front-page-cta__inner">
					<h2 class="front-page-cta__title"><?php esc_html_e( 'Stay Updated', 'asg-live' ); ?></h2>
					<p class="front-page-cta__text"><?php esc_html_e( 'Subscribe to our newsletter and never miss an update.', 'asg-live' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>
		</section>
		<?php
	endif;
	?>
</main>

<?php
get_footer();
