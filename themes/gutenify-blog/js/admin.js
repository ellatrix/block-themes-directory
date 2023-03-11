"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_blogRedirectToKitPage = function gutenify_blogRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_blog.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-blog-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-blog-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_blogRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_blogRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-blog-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-blog-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_blogRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_blogRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-blog-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_blog_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_blog_hide_theme_info_noticebar&gutenify_blog-nonce-name=".concat(window.gutenify_blog.gutenify_blog_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});