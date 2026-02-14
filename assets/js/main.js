/**
 * ASG Theme JavaScript
 *
 * @package ASG
 */

(function () {
	'use strict';

	const header = document.querySelector('.site-header');
	const menuToggle = document.querySelector('.menu-toggle');
	const navigation = document.querySelector('.main-navigation');

	// Hero Carousel Elements.
	const heroCarousel = document.querySelector('.hero-carousel');
	const slides = document.querySelectorAll('.hero-slide');
	const dots = document.querySelectorAll('.hero-carousel-dot');
	const prevBtn = document.querySelector('.hero-carousel-prev');
	const nextBtn = document.querySelector('.hero-carousel-next');
	let currentSlide = 0;
	let autoPlayInterval;
	const autoPlayDelay = 6000;

	/**
	 * Header scroll effect.
	 */
	function handleScroll() {
		if (!header) {
			return;
		}

		if (window.scrollY > 50) {
			header.classList.add('is-scrolled');
		} else {
			header.classList.remove('is-scrolled');
		}
	}

	/**
	 * Toggle mobile menu.
	 */
	function toggleMobileMenu() {
		if (!menuToggle || !navigation) {
			return;
		}

		const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';

		menuToggle.setAttribute('aria-expanded', !isExpanded);
		navigation.classList.toggle('is-active');
		document.body.classList.toggle('menu-open', !isExpanded);

		// Create or remove overlay.
		if (!isExpanded) {
			const overlay = document.createElement('div');
			overlay.className = 'menu-overlay';
			overlay.addEventListener('click', closeMobileMenu);
			document.body.appendChild(overlay);
		} else {
			const overlay = document.querySelector('.menu-overlay');
			if (overlay) {
				overlay.remove();
			}
		}
	}

	/**
	 * Close mobile menu.
	 */
	function closeMobileMenu() {
		if (!menuToggle || !navigation) {
			return;
		}

		menuToggle.setAttribute('aria-expanded', 'false');
		navigation.classList.remove('is-active');
		document.body.classList.remove('menu-open');

		const overlay = document.querySelector('.menu-overlay');
		if (overlay) {
			overlay.remove();
		}
	}

	/**
	 * Handle clicks outside navigation.
	 */
	function handleOutsideClick(event) {
		if (!navigation || !navigation.classList.contains('is-active')) {
			return;
		}

		const isClickOnNav = navigation.contains(event.target);
		const isClickOnToggle = menuToggle && menuToggle.contains(event.target);

		if (!isClickOnNav && !isClickOnToggle) {
			closeMobileMenu();
		}
	}

	/**
	 * Handle escape key.
	 */
	function handleEscapeKey(event) {
		if (event.key === 'Escape') {
			closeMobileMenu();
		}
	}

	/**
	 * Handle window resize.
	 */
	function handleResize() {
		if (window.innerWidth > 768) {
			closeMobileMenu();
		}
	}

	/**
	 * Go to a specific slide.
	 */
	function goToSlide(index) {
		if (!slides.length) {
			return;
		}

		// Remove active class from current slide and dot.
		slides[currentSlide].classList.remove('is-active');
		if (dots[currentSlide]) {
			dots[currentSlide].classList.remove('is-active');
		}

		// Update current slide index.
		currentSlide = index;

		// Handle wrap-around.
		if (currentSlide >= slides.length) {
			currentSlide = 0;
		} else if (currentSlide < 0) {
			currentSlide = slides.length - 1;
		}

		// Add active class to new slide and dot.
		slides[currentSlide].classList.add('is-active');
		if (dots[currentSlide]) {
			dots[currentSlide].classList.add('is-active');
		}
	}

	/**
	 * Go to next slide.
	 */
	function nextSlide() {
		goToSlide(currentSlide + 1);
	}

	/**
	 * Go to previous slide.
	 */
	function prevSlide() {
		goToSlide(currentSlide - 1);
	}

	/**
	 * Start autoplay.
	 */
	function startAutoPlay() {
		if (!slides.length || slides.length <= 1) {
			return;
		}

		stopAutoPlay();
		autoPlayInterval = setInterval(nextSlide, autoPlayDelay);
	}

	/**
	 * Stop autoplay.
	 */
	function stopAutoPlay() {
		if (autoPlayInterval) {
			clearInterval(autoPlayInterval);
		}
	}

	/**
	 * Initialize carousel.
	 */
	function initCarousel() {
		if (!heroCarousel || !slides.length) {
			return;
		}

		// Prev/Next buttons.
		if (prevBtn) {
			prevBtn.addEventListener('click', function () {
				prevSlide();
				startAutoPlay();
			});
		}

		if (nextBtn) {
			nextBtn.addEventListener('click', function () {
				nextSlide();
				startAutoPlay();
			});
		}

		// Dot navigation.
		dots.forEach(function (dot, index) {
			dot.addEventListener('click', function () {
				goToSlide(index);
				startAutoPlay();
			});
		});

		// Pause on hover.
		heroCarousel.addEventListener('mouseenter', stopAutoPlay);
		heroCarousel.addEventListener('mouseleave', startAutoPlay);

		// Keyboard navigation.
		heroCarousel.addEventListener('keydown', function (event) {
			if (event.key === 'ArrowLeft') {
				prevSlide();
				startAutoPlay();
			} else if (event.key === 'ArrowRight') {
				nextSlide();
				startAutoPlay();
			}
		});

		// Touch/swipe support.
		let touchStartX = 0;
		let touchEndX = 0;

		heroCarousel.addEventListener(
			'touchstart',
			function (event) {
				touchStartX = event.changedTouches[0].screenX;
			},
			{ passive: true }
		);

		heroCarousel.addEventListener(
			'touchend',
			function (event) {
				touchEndX = event.changedTouches[0].screenX;
				const diff = touchStartX - touchEndX;

				if (Math.abs(diff) > 50) {
					if (diff > 0) {
						nextSlide();
					} else {
						prevSlide();
					}
					startAutoPlay();
				}
			},
			{ passive: true }
		);

		// Start autoplay.
		startAutoPlay();
	}

	/**
	 * Initialize.
	 */
	function init() {
		window.addEventListener('scroll', handleScroll, { passive: true });
		handleScroll();

		if (menuToggle) {
			menuToggle.addEventListener('click', toggleMobileMenu);
		}

		document.addEventListener('click', handleOutsideClick);
		document.addEventListener('keydown', handleEscapeKey);
		window.addEventListener('resize', handleResize, { passive: true });

		if (navigation) {
			const navLinks = navigation.querySelectorAll('a');
			navLinks.forEach(function (link) {
				link.addEventListener('click', function () {
					if (window.innerWidth <= 768) {
						closeMobileMenu();
					}
				});
			});
		}

		// Initialize hero carousel.
		initCarousel();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
