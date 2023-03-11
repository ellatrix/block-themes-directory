"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_newsRedirectToKitPage = function gutenify_newsRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_news.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-news-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-news-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_newsRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_newsRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-news-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-news-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_newsRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_newsRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-news-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_news_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_news_hide_theme_info_noticebar&gutenify_news-nonce-name=".concat(window.gutenify_news.gutenify_news_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});