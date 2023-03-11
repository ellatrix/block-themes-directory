<?php
/**
 * Title: Team List
 * Slug: driven/team-list
 * Categories: driven_team
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"className":"is-style-underlined-heading"} -->
			<h2 class="is-style-underlined-heading"><?php _e( 'Our Team', 'driven' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Meet our professionals and experts.', 'driven' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph {"placeholder":"Content…","fontSize":"medium"} -->
					<p class="has-medium-font-size"><strong>John Doe</strong><br>Founder &amp; CEO</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph {"placeholder":"Content…","fontSize":"medium"} -->
					<p class="has-medium-font-size"><strong>Jane Smith</strong><br>Web Developer</p>
					<!-- /wp:paragraph -->

				</div>

			</div>
			<!-- /wp:media-text -->

			<!-- wp:media-text {"mediaType":"image","mediaWidth":40,"verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:40% auto">

				<figure class="wp-block-media-text__media">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
				</figure>

				<div class="wp-block-media-text__content">

					<!-- wp:paragraph {"placeholder":"Content…","fontSize":"medium"} -->
					<p class="has-medium-font-size"><strong>Mark Miller</strong><br>Online Marketing</p>
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
