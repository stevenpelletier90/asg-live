<?php
/**
 * The footer template
 *
 * @package ASG_Live
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
					'fallback_cb'    => false,
				)
			);
			?>
			<span class="copyright">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>
			</span>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
