<?php
/**
 * The footer template
 *
 * @package ASG_Live
 */

?>

	<footer id="colophon" class="site-footer">
		<?php
		// Get footer logo from ACF or use custom logo.
		$asg_live_footer_logo = asg_live_get_field( 'footer_logo', '', 'option' );
		?>
		<?php if ( $asg_live_footer_logo || has_custom_logo() ) : ?>
			<div class="footer-logo">
				<?php if ( $asg_live_footer_logo ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( $asg_live_footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $asg_live_footer_logo['alt'] ); ?>">
					</a>
				<?php else : ?>
					<?php the_custom_logo(); ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<nav class="footer-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'footer-menu',
					'container'      => '',
					'depth'          => 1,
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</nav>

		<div class="footer-bottom">
			<p class="footer-copyright">
				<?php
				$asg_live_copyright_text = asg_live_get_field( 'copyright_text', '', 'option' );
				if ( $asg_live_copyright_text ) :
					echo wp_kses_post( $asg_live_copyright_text );
				else :
					printf(
						/* translators: %1$s: Copyright years, %2$s: Site name */
						esc_html__( '&copy; Copyright 2018 - %1$s | by %2$s | All Rights Reserved', 'asg-live' ),
						esc_html( gmdate( 'Y' ) ),
						esc_html( get_bloginfo( 'name' ) )
					);
				endif;
				?>
			</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
