<?php
/**
 * The footer template
 *
 * @package ASG
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-wave">
			<svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
				<path d="M0 60L48 55C96 50 192 40 288 45C384 50 480 70 576 75C672 80 768 70 864 60C960 50 1056 40 1152 45C1248 50 1344 70 1392 80L1440 90V120H0V60Z" fill="currentColor"/>
			</svg>
		</div>

		<div class="footer-main">
			<div class="footer-inner">
				<div class="footer-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
						<span class="logo-icon">
							<svg width="36" height="36" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/>
								<path d="M20 10V30M14 16H26M14 24H26" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="logo-name"><?php bloginfo( 'name' ); ?></span>
					</a>
					<p class="footer-tagline">Providing exceptional anesthesia services with compassion, expertise, and unwavering commitment to patient safety.</p>
				</div>

				<div class="footer-links">
					<div class="footer-column">
						<h4 class="footer-heading">Quick Links</h4>
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

					<div class="footer-column">
						<h4 class="footer-heading">Contact</h4>
						<ul class="footer-contact">
							<li>
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
									<path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
								</svg>
								<span>(555) 123-4567</span>
							</li>
							<li>
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
									<rect x="2" y="4" width="20" height="16" rx="2"/>
									<path d="M22 7l-10 7L2 7"/>
								</svg>
								<span>info@asgmedical.com</span>
							</li>
							<li>
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
									<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
									<circle cx="12" cy="10" r="3"/>
								</svg>
								<span>123 Medical Center Dr.</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="footer-inner">
				<p class="footer-copyright">
					<?php
					printf(
						'&copy; %s %s. All rights reserved.',
						esc_html( gmdate( 'Y' ) ),
						esc_html( get_bloginfo( 'name' ) )
					);
					?>
				</p>
				<div class="footer-legal">
					<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
					<span class="separator"></span>
					<a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms of Service</a>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
