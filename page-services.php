<?php
/**
 * Template Name: Services
 * Template for displaying services/anesthesia management page
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
			<h1 class="page-hero-title">Anesthesia Management</h1>
		</div>
	</section>

	<!-- Section 1: Text Left, Image Right -->
	<section class="content-section">
		<div class="container">
			<div class="content-row">
				<div class="content-text">
					<span class="content-eyebrow">Our Services</span>
					<h2 class="content-title">Comprehensive Anesthesia Solutions</h2>
					<p class="content-lead drop-cap">We provide full-service anesthesia management tailored to meet the unique needs of each surgical facility.</p>
					<div class="content-body">
						<p>Our team of experienced CRNAs delivers exceptional anesthesia care across a wide range of surgical specialties. From routine procedures to complex cases, we ensure patient safety and comfort at every step.</p>
						<p>ASG's proprietary care model integrates seamlessly with your existing workflows, enhancing efficiency while maintaining the highest standards of clinical excellence.</p>
					</div>
				</div>
				<div class="content-image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-anesthesia.jpg" alt="Anesthesia Services">
				</div>
			</div>
		</div>
	</section>

	<!-- Section 2: Image Left, Text Right -->
	<section class="content-section">
		<div class="container">
			<div class="content-row content-row--reverse">
				<div class="content-text">
					<span class="content-eyebrow">What We Offer</span>
					<h2 class="content-title">Services We Provide</h2>
					<div class="content-body">
						<p>Our comprehensive anesthesia management services are designed to support ambulatory surgery centers and office-based surgical facilities of all sizes.</p>
					</div>
					<ul class="feature-list">
						<li>General anesthesia administration</li>
						<li>Regional and local anesthesia</li>
						<li>Sedation services</li>
						<li>Pre-operative assessments</li>
						<li>Post-operative care and monitoring</li>
						<li>Pain management protocols</li>
						<li>Emergency response preparedness</li>
						<li>Quality assurance programs</li>
					</ul>
				</div>
				<div class="content-image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-team.jpg" alt="ASG Services Team">
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: Text Left, Image Right -->
	<section class="content-section">
		<div class="container">
			<div class="content-row">
				<div class="content-text">
					<span class="content-eyebrow">Why Choose ASG</span>
					<h2 class="content-title">The ASG Advantage</h2>
					<div class="content-body">
						<p>When you partner with Anesthesia Services Group, you gain access to a network of highly skilled professionals committed to excellence in patient care.</p>
						<p>Our scalable staffing solutions ensure you always have the coverage you need, while our administrative support handles credentialing, scheduling, and compliance so you can focus on what matters most.</p>
					</div>
					<ul class="feature-list">
						<li>Experienced, board-certified CRNAs</li>
						<li>Flexible staffing solutions</li>
						<li>Full administrative support</li>
						<li>Competitive pricing models</li>
					</ul>
				</div>
				<div class="content-image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-advantage.jpg" alt="ASG Advantage">
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta-section">
		<div class="cta-overlay"></div>
		<div class="cta-content container">
			<h2 class="cta-title">Ready to Optimize Your Anesthesia Services?</h2>
			<p class="cta-text">Contact us today to learn how ASG can support your facility with comprehensive anesthesia management solutions.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
				Contact Us
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<line x1="5" y1="12" x2="19" y2="12"></line>
					<polyline points="12 5 19 12 12 19"></polyline>
				</svg>
			</a>
		</div>
	</section>
</main>

<?php
get_footer();
