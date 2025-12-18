<?php
/**
 * The header template
 *
 * @package ASG
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="header-inner">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
						<span class="logo-icon">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/>
								<path d="M20 10V30M14 16H26M14 24H26" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</span>
						<span class="logo-text">
							<span class="logo-name"><?php bloginfo( 'name' ); ?></span>
							<span class="logo-tagline">Anesthesia Services</span>
						</span>
					</a>
				<?php endif; ?>
			</div>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav-menu',
						'container'      => '',
						'fallback_cb'    => false,
					)
				);
				?>
				<div class="nav-cta">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
						<span>Get in Touch</span>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
				</div>
			</nav>
		</div>
	</header>
