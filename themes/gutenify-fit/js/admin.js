"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_fitRedirectToKitPage = function gutenify_fitRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_fit.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-fit-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-fit-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_fitRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_fitRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-fit-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-fit-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_fitRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_fitRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-fit-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_fit_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_fit_hide_theme_info_noticebar&gutenify_fit-nonce-name=".concat(window.gutenify_fit.gutenify_fit_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});