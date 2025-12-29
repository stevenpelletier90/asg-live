/**
 * ASG Theme JavaScript
 *
 * @package ASG
 */

(function () {
	'use strict';

	const header     = document.querySelector( '.site-header' );
	const menuToggle = document.querySelector( '.menu-toggle' );
	const navigation = document.querySelector( '.main-navigation' );

	/**
	 * Header scroll effect.
	 */
	function handleScroll() {
		if ( ! header) {
			return;
		}

		if (window.scrollY > 50) {
			header.classList.add( 'is-scrolled' );
		} else {
			header.classList.remove( 'is-scrolled' );
		}
	}

	/**
	 * Toggle mobile menu.
	 */
	function toggleMobileMenu() {
		if ( ! menuToggle || ! navigation) {
			return;
		}

		const isExpanded = menuToggle.getAttribute( 'aria-expanded' ) === 'true';

		menuToggle.setAttribute( 'aria-expanded', ! isExpanded );
		navigation.classList.toggle( 'is-active' );

		document.body.style.overflow = isExpanded ? '' : 'hidden';
	}

	/**
	 * Close mobile menu.
	 */
	function closeMobileMenu() {
		if ( ! menuToggle || ! navigation) {
			return;
		}

		menuToggle.setAttribute( 'aria-expanded', 'false' );
		navigation.classList.remove( 'is-active' );
		document.body.style.overflow = '';
	}

	/**
	 * Handle clicks outside navigation.
	 */
	function handleOutsideClick(event) {
		if ( ! navigation || ! navigation.classList.contains( 'is-active' )) {
			return;
		}

		const isClickOnNav    = navigation.contains( event.target );
		const isClickOnToggle = menuToggle && menuToggle.contains( event.target );

		if ( ! isClickOnNav && ! isClickOnToggle) {
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
	 * Initialize.
	 */
	function init() {
		window.addEventListener( 'scroll', handleScroll, { passive: true } );
		handleScroll();

		if (menuToggle) {
			menuToggle.addEventListener( 'click', toggleMobileMenu );
		}

		document.addEventListener( 'click', handleOutsideClick );
		document.addEventListener( 'keydown', handleEscapeKey );
		window.addEventListener( 'resize', handleResize, { passive: true } );

		if (navigation) {
			const navLinks = navigation.querySelectorAll( 'a' );
			navLinks.forEach(
				function (link) {
					link.addEventListener(
						'click',
						function () {
							if (window.innerWidth <= 768) {
								closeMobileMenu();
							}
						}
					);
				}
			);
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
})();
