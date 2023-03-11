"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_photoshotRedirectToKitPage = function gutenify_photoshotRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_photoshot.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-photoshot-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-photoshot-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_photoshotRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_photoshotRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-photoshot-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-photoshot-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_photoshotRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_photoshotRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-photoshot-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_photoshot_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_photoshot_hide_theme_info_noticebar&gutenify_photoshot-nonce-name=".concat(window.gutenify_photoshot.gutenify_photoshot_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});