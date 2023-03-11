"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var redirectToKitPage = function redirectToKitPage(res) {
    window.location = "".concat(window.arc_fse.arc_fse_demo_import_page);
  }; // Activate plugin.


  $(document).on('click', '.arc-fse-activate-plugin', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('arc-fse-importing-plugin');
    apiFetch({
      path: '/wp/v2/plugins/olive-one-click-demo-import/olive-one-click-demo-import',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
  $(document).on('click', '.arc-fse-install-plugin', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('arc-fse-importing-plugin');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "olive-one-click-demo-import",
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
  $(document).on('click', '.arc-fse-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=arc_fse_hide_theme_info_noticebar&arc-fse-nonce-name=".concat(window.arc_fse.arc_fse_nonce));
    apiFetch({
      url: ajaxurl + "?action=arc_fse_hide_theme_info_noticebar&arc-fse-nonce-name=".concat(window.arc_fse.arc_fse_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});