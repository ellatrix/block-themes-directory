 /** This js file handles menu navigation logic
 *
 * @package Responsive-FSE
 * */

(function( $ ) {
	var masthead, menuToggle, siteNavContain;

	masthead       = $( '.wp-site-blocks .site-header' );
	menuToggle     = masthead.find( '.menu-toggle' );
	siteNavContain = masthead.find( '.wp-block-navigation' );

	// Toggle menu button svg path.
	var pathName, newURL, menuIcon, closeIcon, toggleIcon, toggleClose;

	toggleIcon  = masthead.find( '.icon.icon-menu');
	toggleClose = masthead.find( '.icon.icon-close');

	pathName = window.location.pathname.split('/')[1];
	newURL   = window.location.protocol + "//" + window.location.host + "/" + pathName +'/wp-content/themes/responsive-fse/assets/icons/genericons-neue.svg';

	menuIcon = newURL + '#menu';
	toggleIcon.html("<use xlink:href="+menuIcon+"></use>");

	closeIcon = newURL + '#close';
	toggleClose.html("<use xlink:href="+closeIcon+"></use>");

	// Sticky header parent overflow visibility.
	var siteBlocks, stickyHeader, adminBar, breakpoint_sticky;

	siteBlocks   = $( '.wp-site-blocks' );
	stickyHeader = $( 'header.is-style-sticky-header' );
	adminBar = $( '#wpadminbar' );
	breakpoint_sticky = window.matchMedia('(max-width: 600px)');

	if ( stickyHeader.length ) {

		// Shift top of sticky header below admin bar if present.
		if ( adminBar.length ){

			stickyHeader.css('top', adminBar.outerHeight() + 'px');
		}
		// Reset top position for smaller screen as admin bar is hidden on small screens on scroll.
		if( breakpoint_sticky.matches ){
			stickyHeader.css('top', '0');
		}

		siteBlocks.css('overflow','visible');

		// Adds scrolled class to body on scroll
		window.addEventListener('scroll', function () {

			document.body.classList[
			window.scrollY > 20 ? 'add': 'remove'
			]('scrolled');
		});

	}

	// Enable menuToggle.
	(function() {

		// Return early if menuToggle is missing.
		if ( ! menuToggle.length ) {
			return;
		}

		var sub_menu = $( '.wp-block-navigation .has-child :where(.submenu-container, .wp-block-navigation__submenu-container)' );
		var breakpoint = window.matchMedia('(max-width: 992px)');
		if(breakpoint.matches){
			sub_menu.css('display', 'none');
		}

		// Add an initial value for the attribute.
		menuToggle.attr( 'aria-expanded', 'false' );

		menuToggle.on( 'click', function() {
			siteNavContain.toggleClass( 'toggled-on' );

			$( this ).attr( 'aria-expanded', siteNavContain.hasClass( 'toggled-on' ) );

			// Close submenu if already open before toggle on.
			sub_menu.css('display', 'none');
			sub_menu.parent().removeClass('focus');
		});
		
		// Closes submenus.
		function submenuClose(context) {
			for ( i = 0; i < sub_menu.length; ++i ) {

				if(sub_menu[i] !== context.parentNode.parentNode && context.parentNode.parentNode.className.indexOf( 'has-child' ) ){
					sub_menu[i].style.display = 'none';
					// Remove previously opened submenus focus.
					if(sub_menu[i].parentNode.classList.contains('focus')){
						sub_menu[i].parentNode.classList.remove('focus');
					}
				}
			}
		}

		/**
		 * Toggles submenu for access on smaller device (Add existing pages).
		 */
		var container = document.querySelector('.wp-block-navigation');

		( function( container ) {

			var touchStartFn, i,
				parentLinkIcon = container.querySelectorAll( '.wp-block-navigation__submenu-icon, .wp-block-page-list__submenu-icon' );
			
			touchStartFn = function( e ) {

				e.preventDefault();

				var parent_li = this.parentNode,
					currentSubmenu = $(parent_li).find( 'ul')[0];
				if ( parent_li.classList.contains( 'has-child' ) ) {

					// Open current submenu on icon click.
					var visibility = currentSubmenu.style.display;
					if ( visibility === 'none') {

						// Hide previously opened submenus.
						submenuClose(this);

						currentSubmenu.style.display = 'block';
					} else {

						// Close current submenu on icon click.
						currentSubmenu.style.display = 'none';

						// Hide previously opened submenus.
						submenuClose(this);
					}
				} 
			};
	
			for ( i = 0; i < parentLinkIcon.length; ++i ) {

				parentLinkIcon[i].addEventListener( 'click', touchStartFn, false );
			}

		}( container ) );

		// Get all the link elements within the menu.
		links = document.querySelectorAll( '.wp-block-navigation a' );

		// Each time a menu link is focused or blurred, toggle focus.
		for ( i = 0, len = links.length; i < len; i++ ) {

			links[i].addEventListener( 'focus', toggleFocus, true );
			links[i].addEventListener( 'blur', toggleFocus, true );

		}

		/**
		 * Toggles `focus` class to allow submenu access on tablets.
		 */
		function toggleFocus() {
			var self = this;

			// Move up through the ancestors of the current link until we hit .toggled-on.
			while ( -1 === self.className.indexOf( 'wp-block-navigation' ) ) {

				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {

					var previousSubMenu   = self.previousElementSibling;
					var reverseTabSubMenu = self.nextElementSibling;

					if ( -1 == self.className.indexOf( 'focus' ) ) {
						self.className += ' focus';
					}

					// On Tab blur remove focus of previous focused element.
					if( previousSubMenu ){
						previousSubMenu.classList.remove('focus');
					}

					// On reverse Tab blur remove focus of previous focused element.
					if( reverseTabSubMenu ){
						reverseTabSubMenu.classList.remove('focus');
					}	
				}

				self = self.parentElement;
			}
		}
		
	})();

})( jQuery );