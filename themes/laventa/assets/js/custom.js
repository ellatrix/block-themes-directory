/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let url = window.location.href;
const catLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
catLink.forEach((item) => {
  if (item.href === url) {
    item.classList.add("active");
  }
});

/*
    Add white background on header transparent when search clicked
*/
let searchBtn = document.querySelector(".search-controller svg.search");

if (searchBtn !== null) {
  searchBtn.addEventListener("click", function (e) {
    document.body.classList.add("open-search");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-search");
    });

    let searchContainer = document.querySelector(".search-container");
    searchContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var searchInput = document.querySelector(".wp-block-search__input");
    window.setTimeout(() => searchInput.focus(), 0);
  });
}

var searchBtnClose = document.querySelector(
  ".search-controller svg.cross"
);

if (searchBtnClose !== null) {
  searchBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");

  });
}

/*
    Add blinker on input field when active
*/
let blinkerField = document.querySelector(".search-controller svg.search");

if (blinkerField !== null) {
  blinkerField.addEventListener("click", function () {
    var searchInput = document.querySelector(".wp-block-search__input");
        window.setTimeout(() => searchInput.focus(), 0);
  });
}
