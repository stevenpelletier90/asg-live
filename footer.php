<?php
/**
 * The footer template
 *
 * @package ASG
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-main">
			<div class="footer-inner">
				<div class="footer-brand">
					<?php
					$footer_logo = asg_get_field( 'footer_logo', false, 'option' );
					if ( $footer_logo ) :
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
							<img src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $footer_logo['alt'] ?: get_bloginfo( 'name' ) ); ?>" width="<?php echo esc_attr( $footer_logo['width'] ); ?>" height="<?php echo esc_attr( $footer_logo['height'] ); ?>">
						</a>
					<?php elseif ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
							<span class="logo-name"><?php bloginfo( 'name' ); ?></span>
						</a>
					<?php endif; ?>
				</div>

				<nav class="footer-nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'footer-menu',
							'container'      => '',
							'depth'          => 1,
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="footer-inner">
				<p class="footer-copyright">
					<?php
					printf(
						'&copy; Copyright %s | by %s | All Rights Reserved',
						esc_html( gmdate( 'Y' ) ),
						esc_html( get_bloginfo( 'name' ) )
					);
					?>
				</p>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
