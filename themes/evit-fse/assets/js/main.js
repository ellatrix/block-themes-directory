(function(){
  // arrow to top function

  // Get the element
  let topBtn = document.querySelector("#evit-fse-to-top");

  // On Click, Scroll to the page's top, replace 'smooth' with 'auto' if you don't want smooth scrolling
  topBtn.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });

  // window.onload = () => (topBtn.style.opacity = 1);
  // On scroll, Show/Hide the btn with animation
  window.onscroll = () =>
    window.scrollY > 800
      ? (topBtn.style.opacity = 1)
      : (topBtn.style.opacity = 0);
})();


//---------------------------------------------------------------------------------------------
(function(){
  //search button sidebar
  let searchBtn = document.querySelector(".search-sidebar");
  let aboutBtn = document.querySelector(".about-sidebar");
  let searchBox = document.querySelector("#sidebar");
  let aboutBox = document.querySelector("#about-us");
  let close = document.querySelector("#close");
  let closeAbout = document.querySelector("#close-about");
  let overlay = document.getElementById("overlay");
  searchBtn.onclick = () => {
    searchBox.style.display = "block";
    overlay.style.display = "block";

    //prevent scroll after clicking button
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    (scrollLeft = window.pageXOffset || document.documentElement.scrollLeft),
      // if any scroll is attempted, set this to the previous value
      (window.onscroll = function () {
        window.scrollTo(scrollLeft, scrollTop);
      });
  };

  aboutBtn.onclick = () => {
    aboutBox.style.display = "block";

    document.getElementById("overlay").style.display = "block";
    //prevent scroll after clicking button
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    (scrollLeft = window.pageXOffset || document.documentElement.scrollLeft),
      // if any scroll is attempted, set this to the previous value
      (window.onscroll = function () {
        window.scrollTo(scrollLeft, scrollTop);
      });
  };

  close.onclick = () => {
    searchBox.style.display = "none";
    aboutBox.style.display = "none";
    window.onscroll = function () {};
    document.getElementById("overlay").style.display = "none";
  };
  closeAbout.onclick = () => {
    aboutBox.style.display = "none";
    window.onscroll = function () {};
    document.getElementById("overlay").style.display = "none";
  };

  overlay.onclick = () => {
    document.getElementById("overlay").style.display = "none";
    searchBox.style.display = "none";
    aboutBox.style.display = "none";
    window.onscroll = function () {};
  };
})();

