
"use strict";
var echelonElements = document.getElementsByClassName('echelon-fse-animate');

function echelonPlayAnimation(echelonElement) {
    if ( echelonElement.getBoundingClientRect().top > 0 && echelonElement.getBoundingClientRect().top <= (window.innerHeight * 0.75) ) {
        echelonElement.classList.add('echelon-fse-animate-init');
    }
}

for (let echelonElement of echelonElements) {
    window.addEventListener('load', function() {
        echelonPlayAnimation(echelonElement);
    });
    window.addEventListener('scroll', function() {
        echelonPlayAnimation(echelonElement);
    });
}