/**
 * ASG Theme JavaScript
 *
 * @package ASG_Live
 */

(function () {
	'use strict';

	// DOM Elements.
	const header     = document.querySelector( '.site-header' );
	const menuToggle = document.querySelector( '.menu-toggle' );
	const navigation = document.querySelector( '.main-navigation' );
	const menuIcon   = menuToggle ? menuToggle.querySelector( '.icon-menu' ) : null;

	/**
	 * Header scroll effect
	 */
	function handleScroll() {
		if ( ! header ) {
			return;
		}

		if ( window.scrollY > 50 ) {
			header.classList.add( 'is-scrolled' );
		} else {
			header.classList.remove( 'is-scrolled' );
		}
	}

	/**
	 * Mobile menu toggle
	 */
	function toggleMobileMenu() {
		if ( ! menuToggle || ! navigation ) {
			return;
		}

		navigation.classList.toggle( 'is-active' );

		const isExpanded = navigation.classList.contains( 'is-active' );
		menuToggle.setAttribute( 'aria-expanded', isExpanded );

		// Prevent body scroll when menu is open.
		document.body.style.overflow = isExpanded ? 'hidden' : '';
	}

	/**
	 * Close mobile menu
	 */
	function closeMobileMenu() {
		if ( ! navigation ) {
			return;
		}

		navigation.classList.remove( 'is-active' );
		if ( menuToggle ) {
			menuToggle.setAttribute( 'aria-expanded', 'false' );
		}
		document.body.style.overflow = '';
	}

	/**
	 * Handle clicks outside navigation
	 */
	function handleOutsideClick( event ) {
		if ( ! navigation || ! navigation.classList.contains( 'is-active' ) ) {
			return;
		}

		const isClickOnNav    = navigation.contains( event.target );
		const isClickOnToggle = menuToggle && menuToggle.contains( event.target );

		if ( ! isClickOnNav && ! isClickOnToggle ) {
			closeMobileMenu();
		}
	}

	/**
	 * Handle window resize
	 */
	function handleResize() {
		// Close mobile menu if window is resized to desktop size.
		if ( window.innerWidth > 768 ) {
			closeMobileMenu();
		}
	}

	/**
	 * Handle escape key
	 */
	function handleEscapeKey( event ) {
		if ( event.key === 'Escape' ) {
			closeMobileMenu();
		}
	}

	/**
	 * Smooth scroll for anchor links
	 */
	function handleAnchorClick( event ) {
		const link = event.target.closest( 'a[href^="#"]' );
		if ( ! link ) {
			return;
		}

		const targetId = link.getAttribute( 'href' );
		if ( targetId === '#' ) {
			return;
		}

		const targetElement = document.querySelector( targetId );
		if ( ! targetElement ) {
			return;
		}

		event.preventDefault();

		const headerHeight   = header ? header.offsetHeight : 0;
		const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

		window.scrollTo(
			{
				top: targetPosition,
				behavior: 'smooth'
			}
		);

		// Close mobile menu if open.
		closeMobileMenu();
	}

	/**
	 * Initialize
	 */
	function init() {
		// Scroll handler.
		window.addEventListener( 'scroll', handleScroll, { passive: true } );
		handleScroll(); // Run once on load.

		// Mobile menu toggle.
		if ( menuToggle ) {
			menuToggle.addEventListener( 'click', toggleMobileMenu );
		}

		// Close menu on outside click.
		document.addEventListener( 'click', handleOutsideClick );

		// Handle resize.
		window.addEventListener( 'resize', handleResize, { passive: true } );

		// Handle escape key.
		document.addEventListener( 'keydown', handleEscapeKey );

		// Smooth scroll for anchor links.
		document.addEventListener( 'click', handleAnchorClick );

		// Close menu when a nav link is clicked (mobile).
		if ( navigation ) {
			const navLinks = navigation.querySelectorAll( '.nav-link' );
			navLinks.forEach(
				function ( link ) {
					link.addEventListener(
						'click',
						function () {
							if ( window.innerWidth <= 768 ) {
								closeMobileMenu();
							}
						}
					);
				}
			);
		}
	}

	// Run on DOM ready.
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
})();
