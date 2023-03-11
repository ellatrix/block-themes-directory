document.addEventListener("DOMContentLoaded", function(e) {

  
    var aplointerval = setInterval(function() {
        initBlock()
    },1000);

    function initBlock() {

        let observerOptions = {rootMargin: '0px',threshold: 0.3}
        var observer = new IntersectionObserver(observerCallback, observerOptions);
        
        function observerCallback(entries, observer) {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                  entry.target.classList.add("aploshow");
                  observer.unobserve(entry.target);
                }
            });
        };
        
        document.querySelectorAll('.aploanim').forEach((i) => {
            if (i) {
                observer.observe(i);
            }
        });

        clearInterval(aplointerval);
    }    
})

