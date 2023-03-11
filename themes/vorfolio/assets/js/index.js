
"use strict";
var vorfolioElements = document.getElementsByClassName('vorfolio-animate');

function vorfolioPlayAnimation(vorfolioElement) {
    if ( vorfolioElement.getBoundingClientRect().top > 0 && vorfolioElement.getBoundingClientRect().top <= (window.innerHeight * 0.75) ) {
        vorfolioElement.classList.add('vorfolio-animate-init');
    }
}

for (let vorfolioElement of vorfolioElements) {
    window.addEventListener('load', function() {
        vorfolioPlayAnimation(vorfolioElement);
    });
    window.addEventListener('scroll', function() {
        vorfolioPlayAnimation(vorfolioElement);
    });
}