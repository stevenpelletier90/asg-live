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
					<p class="contact-info-text">Have questions about our anesthesia services? We'd love to hear from you. Send us an email or fill out the form below.</p>

					<div class="contact-details">
						<div class="contact-detail">
							<div class="contact-detail-icon">
								<i class="fa-solid fa-envelope"></i>
							</div>
							<div class="contact-detail-content">
								<h3>Email</h3>
								<a href="mailto:info@asg.live">info@asg.live</a>
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
