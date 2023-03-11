"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_agencyRedirectToKitPage = function gutenify_agencyRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_agency.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-agency-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-agency-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_agencyRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_agencyRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-agency-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-agency-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_agencyRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_agencyRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-agency-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_agency_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_agency_hide_theme_info_noticebar&gutenify_agency-nonce-name=".concat(window.gutenify_agency.gutenify_agency_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});