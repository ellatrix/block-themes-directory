"use strict";
const frAnimateObserves = document.getElementsByClassName('fr-animate');

let franimateobserve = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            let item = entry.target;
            if(document.querySelector('.fr-page-preloader') !== null && window.scrollY < 150){
                setTimeout(() => {item.classList.add('fr-animate-init');}, 300);
            }else{
                item.classList.add('fr-animate-init');
            }
            //franimateobserve.disconnect();
        }
    });
}, {threshold: 0.3});

for (let itemobserve of frAnimateObserves) {
    franimateobserve.observe(itemobserve);
}