"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_universityRedirectToKitPage = function gutenify_universityRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_university.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-university-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-university-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_universityRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_universityRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-university-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-university-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_universityRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_universityRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-university-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_university_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_university_hide_theme_info_noticebar&gutenify_university-nonce-name=".concat(window.gutenify_university.gutenify_university_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});