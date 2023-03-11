/**
 * Custom JS for theme elements
 */

/**
 * Scroll to JS for scroll button on header
 */
const rhythmicEventSection = document.querySelector(".events-content-wrapper");

if (rhythmicEventSection !== null) {
	let isDown = false;
	let startX;
	let scrollLeft;

	rhythmicEventSection.addEventListener("mousedown", (e) => {
		isDown = true;
		rhythmicEventSection.classList.add("active");
		startX = e.pageX - rhythmicEventSection.offsetLeft;
		scrollLeft = rhythmicEventSection.scrollLeft;
	});
	rhythmicEventSection.addEventListener("mouseleave", () => {
		isDown = false;
		rhythmicEventSection.classList.remove("active");
	});
	rhythmicEventSection.addEventListener("mouseup", () => {
		isDown = false;
		rhythmicEventSection.classList.remove("active");
	});
	rhythmicEventSection.addEventListener("mousemove", (e) => {
		if (!isDown) return;

		e.preventDefault();

		let x = e.pageX - rhythmicEventSection.offsetLeft;
		let walk = (x - startX) * 3; //scroll-fast

		rhythmicEventSection.scrollLeft = scrollLeft - walk;
	});
}

let elem = document.querySelector(".sticky-playlist.wp-block-section");
let body = document.body;
if (elem) {
	body.classList.add("has-sticky-playlist");
}

// RESIZE FUNCTION
window.addEventListener("resize", onResizeFunction);

// LOAD FUNCTION
window.addEventListener("load", onResizeFunction);

function onResizeFunction(e) {
	//do whatever you want to do on resize event
	let serviceImage = document.querySelector(".service-image");
	let serviceContent = document.querySelectorAll(".service-content");

	if (serviceImage !== null && serviceContent !== null) {
		let serviceImageClientHeight = serviceImage.clientHeight;
	
		serviceContent.forEach((item) => {
			item.style.minHeight = `${serviceImageClientHeight}px`;
			item.style.minHeight <= `300px` && (item.style.overflowY = "scroll");
			item.style.minHeight <= `300px` && (item.style.paddingTop = `50px`);
		});
	}
}