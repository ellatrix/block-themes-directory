"use strict";

// Remove the transition class
jQuery(function ($) {
  var animatedElements = document.querySelectorAll(':not(.swiper-slide) > .animated'); // console.log( animatedElements );

  if (animatedElements.length > 0) {
    var _loop = function _loop() {
      var animatedElement = animatedElements[aniIndex];
      var parentHasClass = animatedElement.closest('.swiper-slide') !== null;

      if (!parentHasClass) {
        var animations = [];

        for (index = 0; index < animatedElement.classList.length; index++) {
          if (animatedElement.classList[index].startsWith("animated-")) {
            animations.push(animatedElement.classList[index]);
          }
        } // Create the observer, same as before:


        var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              for (var index = 0; index < animations.length; index++) {
                animatedElement.classList.add(animations[index].replace('animated-', ''));
              }

              return;
            } // animatedElement.classList.remove('animated');

          });
        });
        observer.observe(animatedElement);
      }
    };

    for (var aniIndex = 0; aniIndex < animatedElements.length; aniIndex++) {
      var index;

      _loop();
    }
  }
});