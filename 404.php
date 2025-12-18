<?php
/**
 * The template for displaying 404 pages
 *
 * @package ASG
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404">
		<div class="container">
			<h1>404</h1>
			<p>Page not found.</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a>
		</div>
	</section>
</main>

<?php
get_footer();
