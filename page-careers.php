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
			<p class="page-hero-subtitle">
				<a href="#apply">Application Form Below <i class="fa-solid fa-arrow-down"></i></a>
			</p>
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
							<i class="fa-solid fa-arrow-down"></i>
						</a>
					</div>
				</div>
				<div class="content-image content-image--featured">
					<img src="/wp-content/uploads/2026/01/surgeons.jpg" alt="Join Our Team">
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
					<img src="/wp-content/uploads/2026/01/process-1.jpg" alt="Career Benefits">
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
						<a href="#apply" class="btn btn-primary">
							Apply Now
							<i class="fa-solid fa-arrow-down"></i>
						</a>
					</div>
				</div>
				<div class="content-image">
					<img src="/wp-content/uploads/2026/01/operating-room.jpg" alt="Career Opportunities">
				</div>
			</div>
		</div>
	</section>

	<!-- Application Form Section -->
	<section class="application-form-section" id="apply">
		<div class="container">
			<header class="section-header">
				<h2 class="section-title">Apply Now</h2>
				<p class="section-subtitle">Ready to join our team? Fill out the form below and we'll be in touch.</p>
			</header>
			<div class="application-form-wrapper">
				<?php echo do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true" tabindex="200"]' ); ?>
			</div>
		</div>
	</section>

	<!-- Recruitment Process Section -->
	<section class="recruitment-process">
		<div class="container">
			<h2 class="section-title">What Does The Recruitment Process Look Like?</h2>
			<div class="process-steps">
				<div class="process-step">
					<div class="process-icon">
						<i class="fa-solid fa-phone-volume"></i>
					</div>
					<h3 class="process-title">1. Phone Interview</h3>
					<p class="process-text">The initial conversation.</p>
				</div>
				<div class="process-step">
					<div class="process-icon">
						<i class="fa-solid fa-users"></i>
					</div>
					<h3 class="process-title">2. First Interview</h3>
					<p class="process-text">In-person meeting.</p>
				</div>
				<div class="process-step">
					<div class="process-icon">
						<i class="fa-solid fa-gear"></i>
					</div>
					<h3 class="process-title">3. Technical Test</h3>
					<p class="process-text">Let's see what you know!</p>
				</div>
				<div class="process-step">
					<div class="process-icon">
						<i class="fa-solid fa-handshake"></i>
					</div>
					<h3 class="process-title">4. Offer</h3>
					<p class="process-text">Welcome to the team!</p>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
