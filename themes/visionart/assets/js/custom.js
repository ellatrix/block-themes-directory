/**
 * Custom JS for theme elements
 */

// ADDED DELAY TO LIST ITEMS
let time = 0.2;

let content = document.querySelectorAll('.wp-block-navigation__container,.wp-block-page-list');
content.forEach((item) => {
  let firstChild = item.childNodes
  firstChild.forEach(item => {
    let lastChild = item.lastChild;
    let ul = 'wp-block-navigation__submenu-container';
    if (lastChild.classList.contains(ul)) {
      lastChild.classList.add('main-list')
      let nestedChild = lastChild.children;
      Array.from(nestedChild).forEach((item, index) => {
        item.setAttribute("style", `transition-delay: ${time * index}s`);
      })
    }
  })
})

// MAKE DUPLICATE OF SOCIAL ICONS

let divWrapper = document.querySelectorAll('.wp-block-social-links.social-lists li a');

if (divWrapper !== null) {

  divWrapper.forEach((icon) => {
    let appendIcon = icon.querySelector('.wp-block-social-links.social-lists svg');
    let dupIcon = appendIcon.cloneNode(appendIcon)
    dupIcon.classList.add('clone')
    icon.appendChild(dupIcon)
  })
}

let cartBtn = document.querySelectorAll('.add_to_cart_button');
cartBtn.forEach((item) => {
  let text = 'added to cart';
  item.addEventListener('click', function () {
    item.innerHTML = text;
  })
})
