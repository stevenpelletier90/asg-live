<?php
/**
 * The template for displaying pages
 *
 * @package ASG
 */

get_header();

// Get featured image or use default.
$hero_image = '';
if ( has_post_thumbnail() ) {
	$hero_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
}
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<section class="page-hero"<?php echo $hero_image ? ' style="background-image: url(' . esc_url( $hero_image ) . ');"' : ''; ?>>
			<div class="page-hero-overlay"></div>
			<div class="page-hero-content">
				<?php the_title( '<h1 class="page-hero-title">', '</h1>' ); ?>
			</div>
		</section>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content container">
				<?php the_content(); ?>
			</div>
		</article>
		<?php
	endwhile;
	?>
</main>

<?php
get_footer();
