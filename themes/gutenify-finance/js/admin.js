"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_financeRedirectToKitPage = function gutenify_financeRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_finance.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-finance-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-finance-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_financeRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_financeRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-finance-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-finance-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_financeRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_financeRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-finance-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_finance_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_finance_hide_theme_info_noticebar&gutenify_finance-nonce-name=".concat(window.gutenify_finance.gutenify_finance_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});