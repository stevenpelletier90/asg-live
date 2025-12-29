<?php
/**
 * Template Name: Careers
 * Template for displaying careers page
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
			<h1 class="page-hero-title">Careers</h1>
		</div>
	</section>

	<!-- Section 1: Image Left, Text Right (like the screenshot) -->
	<section class="content-section">
		<div class="container">
			<div class="content-row content-row--reverse">
				<div class="content-text">
					<h2 class="content-title">Are you looking for an awesome place to work?</h2>
					<div class="content-body">
						<p>Whether you are completing your nurse anesthesia residency training program, or are a seasoned professional nurse anesthesiologist seeking opportunities to work in a great environment, we encourage and invite you to consider a career with ASG.</p>
						<p>Join our team of dedicated professionals and experience the difference of working with a company that values its employees and prioritizes patient care above all else.</p>
					</div>
					<div class="content-cta">
						<a href="#apply" class="btn btn-primary">
							Apply Today
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg>
						</a>
					</div>
				</div>
				<div class="content-image content-image--featured">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/careers-hero.jpg" alt="Join Our Team">
				</div>
			</div>
		</div>
	</section>

	<!-- Section 2: Text Left, Image Right -->
	<section class="content-section">
		<div class="container">
			<div class="content-row">
				<div class="content-text">
					<span class="content-eyebrow">Why Work With Us</span>
					<h2 class="content-title">Benefits of Joining ASG</h2>
					<div class="content-body">
						<p>At ASG, we believe that our success is built on the foundation of our talented and dedicated team. We offer competitive compensation and a supportive work environment that fosters professional growth.</p>
					</div>
					<ul class="feature-list">
						<li>Competitive salary and benefits package</li>
						<li>Flexible scheduling options</li>
						<li>Professional development opportunities</li>
						<li>Collaborative team environment</li>
						<li>State-of-the-art facilities</li>
						<li>Work-life balance focus</li>
					</ul>
				</div>
				<div class="content-image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/careers-benefits.jpg" alt="Career Benefits">
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: Image Left, Text Right -->
	<section class="content-section">
		<div class="container">
			<div class="content-row content-row--reverse">
				<div class="content-text">
					<span class="content-eyebrow">Open Positions</span>
					<h2 class="content-title">Current Opportunities</h2>
					<div class="content-body">
						<p>We are always looking for talented CRNAs and anesthesia professionals to join our growing team. Whether you're seeking full-time, part-time, or PRN positions, we have opportunities at facilities across the country.</p>
						<p>Our positions offer the chance to work in diverse surgical settings, from ambulatory surgery centers to office-based practices, providing a wide range of clinical experiences.</p>
					</div>
					<div class="content-cta">
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
							View Openings
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg>
						</a>
					</div>
				</div>
				<div class="content-image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/careers-opportunities.jpg" alt="Career Opportunities">
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta-section" id="apply">
		<div class="cta-overlay"></div>
		<div class="cta-content container">
			<h2 class="cta-title">Ready to Join Our Team?</h2>
			<p class="cta-text">Take the next step in your career and become part of the ASG family. Contact us today to learn about available positions.</p>
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
