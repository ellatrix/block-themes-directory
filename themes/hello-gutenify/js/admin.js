"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var hello_gutenifyRedirectToKitPage = function hello_gutenifyRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.hello_gutenify.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.hello-gutenify-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('hello-gutenify-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      hello_gutenifyRedirectToKitPage(res);
    })["catch"](function () {
      hello_gutenifyRedirectToKitPage({});
    });
  });
  $(document).on('click', '.hello-gutenify-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('hello-gutenify-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      hello_gutenifyRedirectToKitPage(res);
    })["catch"](function () {
      hello_gutenifyRedirectToKitPage({});
    });
  });
  $(document).on('click', '.hello-gutenify-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=hello_gutenify_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=hello_gutenify_hide_theme_info_noticebar&hello_gutenify-nonce-name=".concat(window.hello_gutenify.hello_gutenify_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});