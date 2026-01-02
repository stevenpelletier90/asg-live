<?php
/**
 * Template Name: About
 * Template for displaying about page with alternating two-column layout
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
			<h1 class="page-hero-title">About Us</h1>
		</div>
	</section>

	<!-- Section 1: Text Left, Image Right -->
	<section class="content-section">
		<div class="container">
			<div class="content-row">
				<div class="content-text">
					<span class="content-eyebrow">Who We Are</span>
					<h2 class="content-title">At ASG...</h2>
					<p class="content-lead drop-cap">We pride ourselves on providing quality anesthesia to the highest attribute and make patient care a top priority.</p>
					<div class="content-body">
						<p>Our industry-leading Certified Registered Nurse Anesthesiologists combined with our proprietary anesthesia care model facilitate the ideal environment to deliver results that optimize patient care.</p>
						<p>ASG continues to excel in its commitment to its partners, clinicians and patients demonstrating its capabilities and efficiency in the surgical field. ASG providers are dedicated to the health and well-being of its patients, customizing every anesthetic to each individual patient need.</p>
					</div>
				</div>
				<div class="content-image">
					<img src="/wp-content/uploads/2026/01/team-anesthesia.jpg" alt="ASG Medical Team">
				</div>
			</div>
		</div>
	</section>

	<!-- Section 2: Image Left, Text Right -->
	<section class="content-section">
		<div class="container">
			<div class="content-row content-row--reverse">
				<div class="content-text">
					<span class="content-eyebrow">Our Mission</span>
					<h2 class="content-title">Excellence in Patient Care</h2>
					<div class="content-body">
						<p>Our office based surgical centers as well as ambulatory surgical centers are customized to enhance perioperative management, anesthesia services, patient satisfaction, and excellence in performance.</p>
						<p>We work closely with our partner facilities to ensure seamless integration and consistent delivery of outstanding anesthesia care across all locations.</p>
					</div>
					<ul class="feature-list">
						<li>Board-certified anesthesia professionals</li>
						<li>State-of-the-art monitoring equipment</li>
						<li>Personalized patient care plans</li>
						<li>24/7 clinical support</li>
					</ul>
				</div>
				<div class="content-image">
					<img src="/wp-content/uploads/2026/01/operating-room.jpg" alt="ASG Patient Care">
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
