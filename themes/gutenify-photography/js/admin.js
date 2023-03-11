"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_photographyRedirectToKitPage = function gutenify_photographyRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_photography.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-photography-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-photography-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_photographyRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_photographyRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-photography-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-photography-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_photographyRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_photographyRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-photography-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_photography_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_photography_hide_theme_info_noticebar&gutenify_photography-nonce-name=".concat(window.gutenify_photography.gutenify_photography_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});