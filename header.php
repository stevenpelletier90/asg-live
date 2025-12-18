<?php
/**
 * The header template
 *
 * @package ASG_Live
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'asg-live' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-inner">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span class="site-title"><?php bloginfo( 'name' ); ?></span>
					</a>
				<?php endif; ?>
			</div>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'asg-live' ); ?></span>
				<?php asg_live_icon( 'menu' ); ?>
			</button>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav-menu',
						'container'      => '',
						'walker'         => new ASG_Live_Nav_Walker(),
						'fallback_cb'    => '__return_false',
					)
				);
				?>
				<div class="header-cta">
					<?php
					$asg_live_cta_text = asg_live_get_field( 'header_cta_text', __( 'Contact Us', 'asg-live' ), 'option' );
					$asg_live_cta_link = asg_live_get_field( 'header_cta_link', '/contact/', 'option' );
					?>
					<a href="<?php echo esc_url( $asg_live_cta_link ); ?>" class="btn btn--primary">
						<?php echo esc_html( $asg_live_cta_text ); ?>
					</a>
				</div>
			</nav>
		</div>
	</header>
