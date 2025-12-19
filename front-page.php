<?php
/**
 * The front page template
 *
 * @package ASG
 */

get_header();

// Get ACF fields for hero.
$hero_title    = asg_get_field( 'hero_title', '', 'option' ) ?: get_bloginfo( 'name' );
$hero_subtitle = asg_get_field( 'hero_subtitle', '', 'option' );
$hero_image    = asg_get_field( 'hero_image', false, 'option' );
$hero_cta_text = asg_get_field( 'hero_cta_text', '', 'option' );
$hero_cta_link = asg_get_field( 'hero_cta_link', '', 'option' );

$hero_style = '';
if ( $hero_image ) {
	$hero_style = 'background-image: url(' . esc_url( $hero_image['url'] ) . ');';
}
?>

<main id="primary" class="site-main">
	<!-- Hero Section -->
	<section class="hero-home"<?php echo $hero_style ? ' style="' . esc_attr( $hero_style ) . '"' : ''; ?>>
		<div class="hero-overlay"></div>
		<div class="hero-content">
			<h1 class="hero-title fade-in"><?php echo esc_html( $hero_title ); ?></h1>
			<?php if ( $hero_subtitle ) : ?>
				<p class="hero-subtitle fade-in fade-delay-1"><?php echo esc_html( $hero_subtitle ); ?></p>
			<?php endif; ?>
			<?php if ( $hero_cta_text && $hero_cta_link ) : ?>
				<div class="hero-cta fade-in fade-delay-2">
					<a href="<?php echo esc_url( $hero_cta_link ); ?>" class="btn btn-primary">
						<?php echo esc_html( $hero_cta_text ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<!-- Page Content -->
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			if ( get_the_content() ) :
				?>
				<div class="entry-content container">
					<?php the_content(); ?>
				</div>
				<?php
			endif;
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();
