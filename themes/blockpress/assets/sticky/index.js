"use strict";
window.addEventListener("scroll" ,function() {
    let header = document.querySelector(".fr-sticky-header");
    if(header){
        let parentblock = header.parentNode;
        parentblock.classList.toggle("fr-sticky-enable", window.scrollY > 0);
        document.body.style = "--blockpress-sticky-height:"+parentblock.clientHeight+"px";
    }
    
});