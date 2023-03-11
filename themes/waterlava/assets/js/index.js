
"use strict";
var elements = document.getElementsByClassName('waterlava-animate');

function playAnimation(element) {
    if ( element.getBoundingClientRect().top > 0 && element.getBoundingClientRect().top <= (window.innerHeight * 0.75) ) {
        element.classList.add('waterlava-animate-init');
    }
}

for (let element of elements) {
    window.addEventListener('load', function() {
        playAnimation(element);
    });
    window.addEventListener('scroll', function() {
        playAnimation(element);
    });
}