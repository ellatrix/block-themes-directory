/* STICKY NAVBAR */

// get the navbar position and the height
let carlina_navbar = document.querySelector(".floating");
let carlina_navbarPos = 0;
let carlina_navbarHeight = 0;
if (carlina_navbar != null) {
    carlina_navbarPos = carlina_navbar.offsetTop;
    carlina_navbarHeight = carlina_navbar.offsetHeight;
}

// call the sticky function when on scroll
window.onscroll = function () { carlina_sticky() };

// add the sticky class to the navbar when the navbar reaches the top
// remove the sticky class when scroll above the navbar position
function carlina_sticky() {
    if (window.pageYOffset >= carlina_navbarPos + carlina_navbarHeight && carlina_navbar != null) {
        carlina_navbar.classList.add("stickynav");
        carlina_navbar.previousElementSibling.style.marginBottom = carlina_navbarHeight.toString() + "px";
    } else if (window.pageYOffset < carlina_navbarPos + carlina_navbarHeight && carlina_navbar != null) {
        carlina_navbar.classList.remove("stickynav");
        carlina_navbar.previousElementSibling.style.marginBottom = "0";
    }
}

/* EFFECT ON TAGLINE ON FRONTPAGE */

let carlina_tagline = document.querySelector(".vibrate");

// when tagline has vibrate class, move the tagline x-coordinate opposite with mouse
if (carlina_tagline != null) {
    carlina_tagline.addEventListener("mousemove", (event) => {
        carlina_tagline.style.marginLeft = - event.offsetX / 10 + "px";

    })
}


/* SET LARGER FONT SIZE FOR MOBILE VIEW */

let carlina_xs = document.querySelectorAll(".has-x-small-font-size");
let carlina_s = document.querySelectorAll(".has-small-font-size");
let carlina_m = document.querySelectorAll(".has-medium-font-size");

if (window.innerWidth <= 768) {
    carlina_xs.forEach(carlina_xs => {
        carlina_xs.classList.remove("has-x-small-font-size");
        carlina_xs.classList.add("has-small-font-size");
    });
    carlina_s.forEach(carlina_s => {
        carlina_s.classList.remove("has-small-font-size");
        carlina_s.classList.add("has-medium-font-size");
    });
    carlina_m.forEach(carlina_m => {
        carlina_m.classList.remove("has-medium-font-size");
        carlina_m.classList.add("has-medium-large-font-size");
    });
}


/* SET IMAGE ALIGNMENT */

let carlina_figures = document.querySelectorAll("figure");

// for figures with width > container to be resized
carlina_figures.forEach(carlina_fig => {
    if (carlina_fig.firstChild.width > carlina_fig.parentElement.offsetWidth) {
        carlina_fig.style.width = "auto";
    }
});

// for image align centre
let carlina_centred = document.querySelectorAll("img.aligncenter");
if (carlina_centred != null) {
    carlina_centred.forEach(carlina_centre => {
        console.log(carlina_centre.parentElement.style);
        carlina_centre.parentElement.style.textAlign = "center";
    });
}
