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
								<i class="fa-solid fa-location-dot"></i>
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
								<i class="fa-solid fa-phone"></i>
							</div>
							<div class="contact-detail-content">
								<h3>Phone</h3>
								<a href="tel:+13055551234">(305) 555-1234</a>
							</div>
						</div>

						<div class="contact-detail">
							<div class="contact-detail-icon">
								<i class="fa-solid fa-envelope"></i>
							</div>
							<div class="contact-detail-content">
								<h3>Email</h3>
								<a href="mailto:info@asgservices.com">info@asgservices.com</a>
							</div>
						</div>

						<div class="contact-detail">
							<div class="contact-detail-icon">
								<i class="fa-solid fa-clock"></i>
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
					<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true" tabindex="100"]' ); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
