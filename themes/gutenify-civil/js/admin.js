"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_civilRedirectToKitPage = function gutenify_civilRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_civil.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-civil-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-civil-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_civilRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_civilRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-civil-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-civil-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_civilRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_civilRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-civil-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_civil_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_civil_hide_theme_info_noticebar&gutenify_civil-nonce-name=".concat(window.gutenify_civil.gutenify_civil_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});