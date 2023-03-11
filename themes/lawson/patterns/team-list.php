<?php
/**
 * Title: Team List
 * Slug: lawson/team-list
 * Categories: lawson_team
*/
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4vw"}}}} -->
<div class="wp-block-group" style="margin-bottom:4vw">

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading -->
			<h2><?php _e( 'Our Team', 'lawson' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Meet our professionals and experts.', 'lawson' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph -->
					<p><strong>John Doe</strong><br>Founder &amp; CEO</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph -->
					<p><strong>Jane Smith</strong><br>Web Developer</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph -->
					<p><strong>Mark Miller</strong><br>Online Marketing</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
