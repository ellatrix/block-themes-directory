(function ($) {
	"use strict";

	child_theme();

	function child_theme() {
		let $notice = $("#child-theme-text");

		function ajax_callback(r) {
			if (typeof r.done !== "undefined") {
				console.log(r);
				$notice.show();
				$notice.addClass("notice-success");
				$notice.html(r.message);
			}
		}

		// Update child themes
		$(".ona-update-child-theme").on("click", function (e) {
			e.preventDefault();
			let _this = $(this);
			let notice = _this.parent().parent(".update-message");
			let slug = _this.data("theme");

			let data = {
				action: "ona_update_child_theme",
				wpnonce: ona_params.wpnonce,
				slug: slug,
			};

			$.ajax({
				type: "POST",
				url: ona_params.ajaxurl,
				data: data,
				beforeSend: function (xhr) {
					_this.html(ona_params.processing).attr("disabled", true);
				},
			})
				.done(function (response) {
					notice
						.removeClass("notice-warning update-message notice-alt")
						.addClass("notice-success")
						.html(response.message);
				})
				.fail(function (response) {
					notice.html(response.message);
				});
		});

		// Install child themes
		$(".ona-install-child-theme").on("click", function (e) {
			e.preventDefault();
			let _this = $(this);
			let slug = _this.data("theme");
			let pro = _this.data("theme-pro");
			let downloadUrl = !pro
				? "https://api.wordpress.org/themes/info/1.1/?action=theme_information&request[slug]=" +
				  slug
				: null;

			function send_ajax_response(data = {}) {
				$.post(
					ona_params.ajaxurl,
					{
						action: "ona_activate_child_theme",
						wpnonce: ona_params.wpnonce,
						slug: slug,
						pro: pro,
						download_link: data?.download_link ?? null,
					},
					ajax_callback
				)
					.done(function () {
						_this
							.html(ona_params.finished)
							.attr("disabled", true)
							.css({ cursor: "not-allowed", "pointer-events": "none" });

						location.reload();
					})
					.fail(ajax_callback);
			}

			_this.html(ona_params.processing).attr("disabled", true);

			

			// Get data from the repo
			$.ajax({
				dataType: "json",
				url: downloadUrl,
				success: function (data, status, xhr) {
					send_ajax_response(data);
				},
			});
		});
	}
})(jQuery);
