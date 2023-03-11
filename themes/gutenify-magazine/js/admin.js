"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_magazineRedirectToKitPage = function gutenify_magazineRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_magazine.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-magazine-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-magazine-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_magazineRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_magazineRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-magazine-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-magazine-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_magazineRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_magazineRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-magazine-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_magazine_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_magazine_hide_theme_info_noticebar&gutenify_magazine-nonce-name=".concat(window.gutenify_magazine.gutenify_magazine_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});