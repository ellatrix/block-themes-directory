"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_storeRedirectToKitPage = function gutenify_storeRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_store.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-store-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-store-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_storeRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_storeRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-store-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-store-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_storeRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_storeRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-store-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_store_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_store_hide_theme_info_noticebar&gutenify_store-nonce-name=".concat(window.gutenify_store.gutenify_store_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});