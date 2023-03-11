/**
 * Custom JS for theme elements
 */

/**
 * Scroll to JS for scroll button on header
 */
 const scrollDownBlock = document.querySelector('.wp-block-scroll-down');
 if ( scrollDownBlock ) {
     scrollDownBlock.addEventListener('click', function(e){
         e.preventDefault();
         var nextElementSiblingOffsetTop = this.closest('.wp-block-section').nextElementSibling.offsetTop;
         ;
 
         window.scrollTo({
             top: nextElementSiblingOffsetTop,
             behavior: 'smooth'
         });
     });
 }