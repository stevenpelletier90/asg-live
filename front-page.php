<?php
/**
 * The front page template
 *
 * @package ASG
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- Hero Section -->
	<section class="hero">
		<div class="container">
			<h1>Welcome to <?php bloginfo( 'name' ); ?></h1>
		</div>
	</section>

	<!-- Page Content -->
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();
