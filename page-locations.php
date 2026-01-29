<?php
/**
 * Template Name: Locations
 * Template for displaying locations page with location grid
 *
 * @package ASG
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- Page Hero -->
	<section class="page-hero">
		<div class="page-hero-overlay"></div>
		<div class="page-hero-content">
			<h1 class="page-hero-title">Our Locations</h1>
		</div>
	</section>

	<!-- Locations Section -->
	<section class="locations-section">
		<div class="container">
			<div class="locations-intro">
				<h2 class="section-title">Serving Healthcare Facilities Nationwide</h2>
				<p>Our scalable support allows seamless integration into any office environment. ASG provides comprehensive anesthesia services at surgical centers across the United States.</p>
			</div>

			<div class="locations-grid locations-grid--display">
				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1575917649705-5b59aaa12e6b?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Atlanta</h3>
						<span class="location-card-state">Georgia</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1531218150217-54595bc2b934?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Austin</h3>
						<span class="location-card-state">Texas</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('/wp-content/uploads/2026/01/baltimore.jpg');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Baltimore</h3>
						<span class="location-card-state">Maryland</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('/wp-content/uploads/2026/01/charlotte.jpg');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Charlotte</h3>
						<span class="location-card-state">North Carolina</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1494522855154-9297ac14b55f?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Chicago</h3>
						<span class="location-card-state">Illinois</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1545194445-dddb8f4487c6?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Dallas</h3>
						<span class="location-card-state">Texas</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1546156929-a4c0ac411f47?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Denver</h3>
						<span class="location-card-state">Colorado</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1530089711124-9ca31fb9e863?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Houston</h3>
						<span class="location-card-state">Texas</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1581351721010-8cf859cb14a4?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Las Vegas</h3>
						<span class="location-card-state">Nevada</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1533106497176-45ae19e68ba2?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Miami</h3>
						<span class="location-card-state">Florida</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?w=600&q=80');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">New York City</h3>
						<span class="location-card-state">New York</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('/wp-content/uploads/2026/01/phoenix.jpg');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Phoenix</h3>
						<span class="location-card-state">Arizona</span>
					</div>
				</div>

				<div class="location-card-display" style="background-image: url('/wp-content/uploads/2026/01/st-pete.jpg');">
					<div class="location-card-overlay"></div>
					<div class="location-card-content">
						<h3 class="location-card-title">Tampa</h3>
						<span class="location-card-state">Florida</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta-section" style="background-image: url(/wp-content/uploads/2026/01/anethesia-bg-1.jpg);">
		<div class="cta-overlay"></div>
		<div class="cta-content container">
			<h2 class="cta-title">Call Us for a Consultation</h2>
			<p class="cta-text">We are excellent listeners and deeply learn your office needs.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
				Contact Us
				<i class="fa-solid fa-arrow-right"></i>
			</a>
		</div>
	</section>
</main>

<?php
get_footer();
