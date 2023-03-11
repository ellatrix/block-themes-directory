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

// Add to cart button postioned over product image on woocommerce leagacy template
window.addEventListener("load", overlapBtnFunction);
window.addEventListener("resize", overlapBtnFunction);
function overlapBtnFunction(e) {
  var productImgHeight = document.querySelectorAll(
    "ul.products li.product img"
  );
  var productBtn = document.querySelectorAll(
    "ul.products li.product .add_to_cart_button"
  );
  productImgHeight.forEach((product) => {
    const productHeight = product.clientHeight;
    productBtn.forEach((btn) => {
      const btnHeight = btn.clientHeight;
      btn.setAttribute("style", `top: ${productHeight - btnHeight}px`);
    });
  });
}


// Add to cart button postioned over product image on block woocommerce template all products
window.addEventListener("load", ab);
window.addEventListener("resize", productOverlapBtnFunction);
function productOverlapBtnFunction(e) {
  var blockProductImgHeight = document.querySelectorAll(
    "ul.wc-block-grid__products li .wc-block-grid__product-image img"
  );
  var blockProductBtn = document.querySelectorAll(
    "ul.wc-block-grid__products li .add_to_cart_button"
  );
  blockProductImgHeight.forEach((product) => {
    const productHeight = product.clientHeight;
    blockProductBtn.forEach((btn) => {
      const btnHeight = btn.clientHeight;
      btn.setAttribute("style", `top: ${productHeight - btnHeight}px`);
    });
  });
}
function ab() {
  setTimeout(() => {
    var blockProductImgHeight = document.querySelectorAll(
      "ul.wc-block-grid__products li .wc-block-grid__product-image img"
    );
    var blockProductBtn = document.querySelectorAll(
      "ul.wc-block-grid__products li .add_to_cart_button"
    );
    blockProductImgHeight.forEach((product) => {
      const productHeight = product.clientHeight;
      blockProductBtn.forEach((btn) => {
        const btnHeight = btn.clientHeight;
        btn.setAttribute("style", `top: ${productHeight - btnHeight}px`);
      });
    });
  }, 8500);
}
