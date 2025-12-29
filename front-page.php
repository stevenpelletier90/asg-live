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

// Get ACF fields for intro section.
$intro_title    = asg_get_field( 'intro_title', 'Welcome to ' . get_bloginfo( 'name' ), 'option' );
$intro_subtitle = asg_get_field( 'intro_subtitle', '', 'option' );
$intro_cards    = asg_get_field( 'intro_cards', array(), 'option' );

// Get ACF fields for CTA section.
$cta_title    = asg_get_field( 'cta_title', '', 'option' );
$cta_text     = asg_get_field( 'cta_text', '', 'option' );
$cta_button   = asg_get_field( 'cta_button_text', '', 'option' );
$cta_link     = asg_get_field( 'cta_button_link', '', 'option' );
$cta_image    = asg_get_field( 'cta_background', false, 'option' );

$cta_style = '';
if ( $cta_image ) {
	$cta_style = 'background-image: url(' . esc_url( $cta_image['url'] ) . ');';
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

	<!-- Intro Section -->
	<section class="intro-section">
		<div class="container">
			<header class="section-header">
				<h2 class="section-title"><?php echo esc_html( $intro_title ); ?></h2>
				<?php if ( $intro_subtitle ) : ?>
					<p class="section-subtitle"><?php echo esc_html( $intro_subtitle ); ?></p>
				<?php endif; ?>
			</header>

			<div class="intro-cards">
				<?php if ( $intro_cards ) : ?>
					<?php foreach ( $intro_cards as $card ) : ?>
						<div class="intro-card">
							<?php if ( ! empty( $card['icon'] ) ) : ?>
								<div class="intro-card-icon">
									<img src="<?php echo esc_url( $card['icon']['url'] ); ?>" alt="<?php echo esc_attr( $card['icon']['alt'] ?: $card['title'] ); ?>">
								</div>
							<?php endif; ?>
							<h3 class="intro-card-title"><?php echo esc_html( $card['title'] ); ?></h3>
							<p class="intro-card-text"><?php echo esc_html( $card['text'] ); ?></p>
							<?php if ( ! empty( $card['link_text'] ) && ! empty( $card['link_url'] ) ) : ?>
								<a href="<?php echo esc_url( $card['link_url'] ); ?>" class="intro-card-link">
									<?php echo esc_html( $card['link_text'] ); ?>
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</a>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
					<!-- Default cards when no ACF data -->
					<div class="intro-card">
						<div class="intro-card-icon intro-card-icon--default">
							<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
								<circle cx="9" cy="7" r="4"></circle>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
								<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
							</svg>
						</div>
						<h3 class="intro-card-title">Career Opportunities</h3>
						<p class="intro-card-text">We encourage and invite you to consider a career with us. You'll enjoy a wonderful environment!</p>
						<a href="/careers/" class="intro-card-link">
							Apply Now
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
					<div class="intro-card">
						<div class="intro-card-icon intro-card-icon--default">
							<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"></circle>
								<path d="M12 16v-4"></path>
								<path d="M12 8h.01"></path>
							</svg>
						</div>
						<h3 class="intro-card-title">About Us</h3>
						<p class="intro-card-text">Industry-leading Certified Registered Nurse Anesthesiologists and proprietary anesthesia care model.</p>
						<a href="/about/" class="intro-card-link">
							Read More
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
					<div class="intro-card">
						<div class="intro-card-icon intro-card-icon--default">
							<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
								<circle cx="12" cy="10" r="3"></circle>
							</svg>
						</div>
						<h3 class="intro-card-title">Our Locations</h3>
						<p class="intro-card-text">Our scalable support allows seamless integration into any office environment across the United States.</p>
						<a href="/locations/" class="intro-card-link">
							See Cities
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<?php
	$cta_title_display  = $cta_title ?: 'Partner With Us Today';
	$cta_text_display   = $cta_text ?: 'Experience the difference that dedicated anesthesia professionals can make for your practice and patients.';
	$cta_button_display = $cta_button ?: 'Get Started';
	$cta_link_display   = $cta_link ?: '/contact/';
	?>
	<section class="cta-section"<?php echo $cta_style ? ' style="' . esc_attr( $cta_style ) . '"' : ''; ?>>
		<div class="cta-overlay"></div>
		<div class="cta-content container">
			<h2 class="cta-title"><?php echo esc_html( $cta_title_display ); ?></h2>
			<p class="cta-text"><?php echo esc_html( $cta_text_display ); ?></p>
			<a href="<?php echo esc_url( $cta_link_display ); ?>" class="btn btn-primary">
				<?php echo esc_html( $cta_button_display ); ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<line x1="5" y1="12" x2="19" y2="12"></line>
					<polyline points="12 5 19 12 12 19"></polyline>
				</svg>
			</a>
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
