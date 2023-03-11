"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_fseRedirectToKitPage = function gutenify_fseRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_fse.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-fse-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-fse-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_fseRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_fseRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-fse-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-fse-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_fseRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_fseRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-fse-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_fse_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_fse_hide_theme_info_noticebar&gutenify_fse-nonce-name=".concat(window.gutenify_fse.gutenify_fse_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});