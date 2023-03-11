
"use strict";
var hypebizElements = document.getElementsByClassName('hypebiz-animate');

function hypebizPlayAnimation(element) {
    if ( element.getBoundingClientRect().top > 0 && element.getBoundingClientRect().top <= (window.innerHeight * 0.75) ) {
        element.classList.add('hypebiz-animate-init');
    }
}

for (let element of hypebizElements) {
    window.addEventListener('load', function() {
        hypebizPlayAnimation(element);
    });
    window.addEventListener('scroll', function() {
        hypebizPlayAnimation(element);
    });
}