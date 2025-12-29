<?php
/**
 * Template Name: Contact
 * Template for displaying contact page
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
			<h1 class="page-hero-title">Contact Us</h1>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="contact-section">
		<div class="container">
			<div class="contact-grid">
				<!-- Contact Info -->
				<div class="contact-info">
					<h2 class="contact-info-title">Get In Touch</h2>
					<p class="contact-info-text">Have questions about our anesthesia services? We'd love to hear from you. Reach out using any of the methods below or fill out the form.</p>

					<div class="contact-details">
						<div class="contact-detail">
							<div class="contact-detail-icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
									<circle cx="12" cy="10" r="3"></circle>
								</svg>
							</div>
							<div class="contact-detail-content">
								<h3>Address</h3>
								<address>
									123 Medical Center Drive<br>
									Suite 100<br>
									Miami, FL 33101
								</address>
							</div>
						</div>

						<div class="contact-detail">
							<div class="contact-detail-icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
								</svg>
							</div>
							<div class="contact-detail-content">
								<h3>Phone</h3>
								<a href="tel:+13055551234">(305) 555-1234</a>
							</div>
						</div>

						<div class="contact-detail">
							<div class="contact-detail-icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
									<polyline points="22,6 12,13 2,6"></polyline>
								</svg>
							</div>
							<div class="contact-detail-content">
								<h3>Email</h3>
								<a href="mailto:info@asgservices.com">info@asgservices.com</a>
							</div>
						</div>

						<div class="contact-detail">
							<div class="contact-detail-icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<circle cx="12" cy="12" r="10"></circle>
									<polyline points="12 6 12 12 16 14"></polyline>
								</svg>
							</div>
							<div class="contact-detail-content">
								<h3>Hours</h3>
								<p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday - Sunday: Closed</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="contact-form-wrapper">
					<h2 class="contact-form-title">Send Us a Message</h2>
					<!-- Replace with WPForms shortcode -->
					<div class="contact-form-placeholder">
						<p>Contact form will be added here. Use WPForms or your preferred form plugin.</p>
						<code>[wpforms id="123"]</code>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
