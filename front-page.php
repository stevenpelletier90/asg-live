<?php
/**
 * The front page template
 *
 * @package ASG
 */

get_header();

// Get ACF fields for hero carousel slides.
$hero_slides = asg_get_field( 'hero_slides', array(), 'option' );

// Default slides if no ACF data.
if ( empty( $hero_slides ) ) {
	$hero_slides = array(
		array(
			'logo'     => '/wp-content/uploads/2026/01/asg-750-white.png',
			'text'     => 'Industry-leading anesthesia services for your practice',
			'image'    => '/wp-content/uploads/2026/01/hero-sleep1.jpg',
			'cta_text' => 'Learn More',
			'cta_link' => '/about/',
		),
		array(
			'title'    => 'Expert Anesthesia Care',
			'subtitle' => 'Certified professionals dedicated to patient safety',
			'image'    => '/wp-content/uploads/2026/01/hero-sleep2.jpg',
			'cta_text' => 'Our Services',
			'cta_link' => '/anesthesia-management/',
		),
		array(
			'title'    => 'Nationwide Coverage',
			'subtitle' => 'Serving healthcare facilities across the United States',
			'image'    => '/wp-content/uploads/2026/01/hero-sleep3.jpg',
			'cta_text' => 'View Locations',
			'cta_link' => '/locations/',
		),
	);
}

// Get ACF fields for intro section.
$intro_eyebrow  = asg_get_field( 'intro_eyebrow', 'Welcome to', 'option' );
$intro_title    = asg_get_field( 'intro_title', 'ASG', 'option' );
$intro_subtitle = asg_get_field( 'intro_subtitle', 'Anesthesia Providers', 'option' );
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
	<!-- Hero Carousel Section -->
	<section class="hero-carousel">
		<div class="hero-carousel-track">
			<?php foreach ( $hero_slides as $index => $slide ) : ?>
				<?php
				$slide_image = '';
				if ( ! empty( $slide['image'] ) ) {
					$slide_image = is_array( $slide['image'] ) ? $slide['image']['url'] : $slide['image'];
				}
				?>
				<div class="hero-slide<?php echo 0 === $index ? ' is-active' : ''; ?>" style="background-image: url('<?php echo esc_url( $slide_image ); ?>');">
					<div class="hero-overlay"></div>
					<div class="hero-content">
						<?php if ( ! empty( $slide['logo'] ) ) : ?>
							<img src="<?php echo esc_url( $slide['logo'] ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="hero-logo">
						<?php else : ?>
							<h1 class="hero-title"><?php echo esc_html( $slide['title'] ); ?></h1>
							<?php if ( ! empty( $slide['subtitle'] ) ) : ?>
								<p class="hero-subtitle"><?php echo esc_html( $slide['subtitle'] ); ?></p>
							<?php endif; ?>
						<?php endif; ?>
						<?php if ( ! empty( $slide['text'] ) ) : ?>
							<p class="hero-text"><?php echo esc_html( $slide['text'] ); ?></p>
						<?php endif; ?>
						<?php if ( ! empty( $slide['cta_text'] ) && ! empty( $slide['cta_link'] ) ) : ?>
							<div class="hero-cta">
								<a href="<?php echo esc_url( $slide['cta_link'] ); ?>" class="btn btn-primary">
									<?php echo esc_html( $slide['cta_text'] ); ?>
									<i class="fa-solid fa-arrow-right"></i>
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Carousel Navigation -->
		<button class="hero-carousel-prev" aria-label="Previous slide">
			<i class="fa-solid fa-chevron-left"></i>
		</button>
		<button class="hero-carousel-next" aria-label="Next slide">
			<i class="fa-solid fa-chevron-right"></i>
		</button>

		<!-- Carousel Dots -->
		<div class="hero-carousel-dots">
			<?php foreach ( $hero_slides as $index => $slide ) : ?>
				<button class="hero-carousel-dot<?php echo 0 === $index ? ' is-active' : ''; ?>" aria-label="Go to slide <?php echo esc_attr( $index + 1 ); ?>" data-slide="<?php echo esc_attr( $index ); ?>"></button>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- Intro Section -->
	<section class="intro-section">
		<div class="container">
			<header class="section-header">
				<?php if ( $intro_eyebrow ) : ?>
					<span class="section-eyebrow"><?php echo esc_html( $intro_eyebrow ); ?></span>
				<?php endif; ?>
				<h2 class="section-title"><?php echo esc_html( $intro_title ); ?></h2>
				<?php if ( $intro_subtitle ) : ?>
					<p class="section-subtitle section-subtitle--large"><?php echo esc_html( $intro_subtitle ); ?></p>
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
									<i class="fa-solid fa-arrow-right"></i>
								</a>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
					<!-- Default cards when no ACF data -->
					<div class="intro-card">
						<div class="intro-card-icon intro-card-icon--default">
							<i class="fa-solid fa-user-group"></i>
						</div>
						<h3 class="intro-card-title">Career Opportunities</h3>
						<p class="intro-card-text">We encourage and invite you to consider a career with us. You'll enjoy a wonderful environment!</p>
						<a href="/careers/" class="intro-card-link">
							Apply Now
							<i class="fa-solid fa-arrow-right"></i>
						</a>
					</div>
					<div class="intro-card">
						<div class="intro-card-icon intro-card-icon--default">
							<i class="fa-solid fa-circle-info"></i>
						</div>
						<h3 class="intro-card-title">About Us</h3>
						<p class="intro-card-text">Industry-leading Certified Registered Nurse Anesthesiologists and proprietary anesthesia care model.</p>
						<a href="/about/" class="intro-card-link">
							Read More
							<i class="fa-solid fa-arrow-right"></i>
						</a>
					</div>
					<div class="intro-card">
						<div class="intro-card-icon intro-card-icon--default">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<h3 class="intro-card-title">Our Locations</h3>
						<p class="intro-card-text">Our scalable support allows seamless integration into any office environment across the United States.</p>
						<a href="/locations/" class="intro-card-link">
							See Cities
							<i class="fa-solid fa-arrow-right"></i>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<?php
	$cta_title_display  = $cta_title ?: 'Call Us for a Consultation';
	$cta_text_display   = $cta_text ?: 'We are excellent listeners and deeply learn your office needs.';
	$cta_button_display = $cta_button ?: 'Contact Us';
	$cta_link_display   = $cta_link ?: '/contact/';
	// Default background image if not set via ACF.
	if ( empty( $cta_style ) ) {
		$cta_style = 'background-image: url(/wp-content/uploads/2026/01/anethesia-bg-1.jpg);';
	}
	?>
	<section class="cta-section"<?php echo $cta_style ? ' style="' . esc_attr( $cta_style ) . '"' : ''; ?>>
		<div class="cta-overlay"></div>
		<div class="cta-content container">
			<h2 class="cta-title"><?php echo esc_html( $cta_title_display ); ?></h2>
			<p class="cta-text"><?php echo esc_html( $cta_text_display ); ?></p>
			<a href="<?php echo esc_url( $cta_link_display ); ?>" class="btn btn-primary">
				<?php echo esc_html( $cta_button_display ); ?>
				<i class="fa-solid fa-arrow-right"></i>
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
