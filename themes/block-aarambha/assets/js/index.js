"use strict";

(function () {

	const BlockAarambhaInit = {
		// Fix position when submenu goes off screen.
		submenuPosition: () => {
			// Find all menu items containing sub menus.
			var subMenuHolders = document.getElementsByClassName('has-child');
			// If no menu items with submenus, abort.
			if (!subMenuHolders.length) {
				return;
			}
			for (let subMenuHolder of subMenuHolders) {
				// In each container locate submenu.
				let subMenu = subMenuHolder.querySelector('.wp-block-navigation__submenu-container');
				if (subMenu) {
					// On container mouseover check and fix submenu position.
					subMenuHolder.addEventListener('mouseover', () => {
						let rect = subMenu.getBoundingClientRect(),
							subMenuRight = rect.x + subMenu.offsetWidth,
							subMenuBottom = rect.y + subMenu.offsetHeight;
						if (subMenuRight >= window.innerWidth) {
							subMenu.style.left = 'auto';
							subMenu.style.right = '-1px';
						}
						if (subMenuBottom >= window.innerHeight) {
							subMenu.style.top = 'auto';
							subMenu.style.bottom = '100%';
						}
					});
				}
			}
		},
		// Modal menu functionalities.
		menuModals: () => {
			const menuOpeners = document.getElementsByClassName('wp-block-navigation__responsive-container-open');
			for (let menuOpener of menuOpeners) {

				menuOpener.addEventListener('click', () => {

					let menuParent = menuOpener.parentNode,
						container = menuParent.getElementsByClassName('wp-block-navigation__responsive-container'),
						menuCloser = menuParent.getElementsByClassName('wp-block-navigation__responsive-container-close');

					BlockAarambhaInit.removeReset(container[0]);

					let subParents = container[0].getElementsByClassName('has-child');
					for (let subParent of subParents) {
						// Get submenu container and main link element.
						let subMenuContainer = subParent.querySelectorAll('.wp-block-navigation__submenu-container');
						let subMenuLink = subParent.querySelectorAll('.wp-block-navigation-item__content');

						// Append an arrow element to each sub parent.
						let arrowElm = document.createElement("span");
						let arrow = document.createTextNode("");
						arrowElm.appendChild(arrow);
						arrowElm.setAttribute("class", "subarrow");
						subMenuLink[0].appendChild(arrowElm);

						// Add click event to every arrow.
						arrowElm.addEventListener('click', (event) => {
							subMenuContainer[0].classList.toggle('active');
							event.target.classList.toggle('active');
							event.preventDefault();
							event.stopPropagation();
						});

					}
					menuCloser[0].addEventListener('click', () => {
						BlockAarambhaInit.removeReset(container[0]);
					});

				});
			}
		},
		// Reset modal menus.
		removeReset: (modal) => {

			// Remove all added subarrows.
			let removeElms = modal.querySelectorAll('.subarrow');
			if (removeElms.length) {
				for (let removeElm of removeElms) {
					removeElm.remove();
				}
			}
			// Deactivate all active elements.
			let elmsToRemoveClass = modal.querySelectorAll('.active');
			if (elmsToRemoveClass.length) {
				for (let elm of elmsToRemoveClass) {
					elm.classList.remove('active');
				}
			}
		}

	} // end BlockAarambhaInit object.

	// Add listeners.
	window.addEventListener('load', () => {
		BlockAarambhaInit.submenuPosition();
		BlockAarambhaInit.menuModals();
	});
	window.addEventListener('resize', () => {
		BlockAarambhaInit.submenuPosition();
	});

})();