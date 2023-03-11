"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_corporateRedirectToKitPage = function gutenify_corporateRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_corporate.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-corporate-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-corporate-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_corporateRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_corporateRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-corporate-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-corporate-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_corporateRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_corporateRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-corporate-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_corporate_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_corporate_hide_theme_info_noticebar&gutenify_corporate-nonce-name=".concat(window.gutenify_corporate.gutenify_corporate_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});