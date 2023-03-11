"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_template_kitRedirectToKitPage = function gutenify_template_kitRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_template_kit.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-template-kit-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-template-kit-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_template_kitRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_template_kitRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-template-kit-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-template-kit-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_template_kitRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_template_kitRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-template-kit-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_template_kit_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_template_kit_hide_theme_info_noticebar&gutenify_template_kit-nonce-name=".concat(window.gutenify_template_kit.gutenify_template_kit_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});