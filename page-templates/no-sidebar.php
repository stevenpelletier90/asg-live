<?php
/**
 * Template Name: No Sidebar
 * Template Post Type: page, post
 *
 * A centered content template without sidebar.
 *
 * @package ASG_Live
 */

get_header();
?>

<main id="primary" class="site-main site-main--no-sidebar">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );

		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
	?>
</main>

<?php
get_footer();
