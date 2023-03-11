"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_medicalRedirectToKitPage = function gutenify_medicalRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_medical.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-medical-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-medical-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_medicalRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_medicalRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-medical-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-medical-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_medicalRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_medicalRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-medical-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_medical_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_medical_hide_theme_info_noticebar&gutenify_medical-nonce-name=".concat(window.gutenify_medical.gutenify_medical_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});