"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_hustleRedirectToKitPage = function gutenify_hustleRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_hustle.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-hustle-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-hustle-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_hustleRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_hustleRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-hustle-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-hustle-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_hustleRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_hustleRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-hustle-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_hustle_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_hustle_hide_theme_info_noticebar&gutenify_hustle-nonce-name=".concat(window.gutenify_hustle.gutenify_hustle_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});