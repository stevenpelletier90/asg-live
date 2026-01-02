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
							<i class="fa-solid fa-staff-snake"></i>
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
			</nav>
		</div>
	</header>
