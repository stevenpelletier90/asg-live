<?php
/**
 * Template Name: Landing Page
 * Template Post Type: page
 *
 * A clean landing page template without header navigation or footer.
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

<body <?php body_class( 'landing-page' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site site--landing">
	<main id="primary" class="site-main site-main--landing">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>
	</main>
</div>

<?php wp_footer(); ?>

</body>
</html>
