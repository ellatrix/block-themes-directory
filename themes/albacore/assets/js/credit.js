// Add credit text after the footer
const wwwowscredit = document.querySelector("footer");

if (null !== wwwowscredit) {
	wwwowscredit.insertAdjacentHTML('afterend', '<p class="has-text-align-center wwwows-credit">Proudly Powered by <a href="https://wordpress.org" target="_blank">WordPress</a> and <a href="https://wwwows.com" target="_blank">Wwwows</a></p>');
}
