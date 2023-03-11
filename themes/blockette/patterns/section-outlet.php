<?php
/**
 * Title: Landing outlet section
 * Slug: blockette/section-outlet
 * Categories: blockette-sections
 * Block Types: core/group, core/cover
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

$image_01 = get_theme_file_uri( 'assets/images/female-standing-fashion-527819-pxhere.com.webp' );
$image_02 = get_theme_file_uri( 'assets/images/model-jeans-fashion-633680-pxhere.com.webp' );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-background-secondary"} -->
<div class="wp-block-group alignwide has-vertical-background-secondary-gradient-background has-background"
	style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-primary-secondary"} -->
	<div class="wp-block-group has-vertical-primary-secondary-gradient-background has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:spacer {"height":"10px"} -->
		<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"textColor":"foreground","className":"blockette-animate blockette-move-down"} -->
		<p class="blockette-animate blockette-move-down has-foreground-color has-text-color">
			<?php echo esc_html_x( 'Something that should not be ignored ...', 'Sample text for the section', 'blockette' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textColor":"foreground","className":"blockette-animate blockette-move-down","fontSize":"big"} -->
		<h2 class="blockette-animate blockette-move-down has-foreground-color has-text-color has-big-font-size"> <mark class="has-inline-color has-primary-color">→</mark> <?php echo esc_html_x( 'Last season', 'Sample text for the heading', 'blockette' ); ?> <?php echo esc_html_x( 'outlet', 'Sample text for the heading', 'blockette' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"33.38%","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}},"className":"blockette-animate blockette-move-down"} -->
		<div class="wp-block-column blockette-animate blockette-move-down"
			style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;flex-basis:33.38%">

			<!-- wp:cover {"url":"<?php echo esc_url( $image_01 ); ?>","id":1189,"dimRatio":30,"minHeight":35,"minHeightUnit":"vw","contentPosition":"bottom center","isDark":false,"className":"blockette-rounded-corners","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center blockette-rounded-corners"
				style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw;min-height:35vw"><span
					aria-hidden="true"
					class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img
					class="wp-block-cover__image-background wp-image-1189" alt=""
					src="<?php echo esc_url( $image_01 ); ?>"
					data-object-fit="cover" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:paragraph {"textColor":"white"} -->
					<p class="has-white-color has-text-color">
						<em><?php echo esc_html_x( 'Nature,', 'Sample text for the section', 'blockette' ); ?></em>
						<?php echo esc_html_x( ' in the common sense, refers to essences unchanged by man; space, the air, the river, the leaf.', 'Sample text for the section', 'blockette' ); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"fontSize":"small"} -->
						<div class="wp-block-button has-custom-font-size has-small-font-size">
							<a class="wp-block-button__link wp-element-button">
								<?php echo esc_html_x( 'Browse Casual Fashion', 'Sample text for the button', 'blockette' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:cover -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}},"className":"blockette-animate blockette-move-down blockette-delay-1"} -->
		<div class="wp-block-column blockette-animate blockette-move-down blockette-delay-1"
			style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;flex-basis:33%">
			<!-- wp:spacer {"height":"8vw"} -->
			<div style="height:8vw" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:pullquote -->
			<figure class="wp-block-pullquote">
				<blockquote>
					<p><?php echo esc_html_x( '"Beauty is within, but any help is much appreciated..."', 'Sample text for the blockquote', 'blockette' ); ?></p><cite><?php echo esc_html_x( 'Pablo Goya', 'Sample text for the blockquote', 'blockette' ); ?></cite>
				</blockquote>
			</figure>
			<!-- /wp:pullquote -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.38%","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}},"className":"blockette-animate blockette-move-down"} -->
		<div class="wp-block-column blockette-animate blockette-move-down"
			style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw;flex-basis:33.38%">
			<!-- wp:heading {"level":3} -->
			<h3 id="h-heading">
				<?php echo esc_html_x( 'Hair extensions', 'Sample text for the heading', 'blockette' ); ?>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:cover {"url":"<?php echo esc_url( $image_02 ); ?>","id":1187,"dimRatio":30,"minHeight":35,"minHeightUnit":"vw","contentPosition":"bottom center","isDark":false,"className":"blockette-rounded-corners","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center blockette-rounded-corners" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw;min-height:35vw"><span
					aria-hidden="true"
					class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img
					class="wp-block-cover__image-background wp-image-1187" alt=""
					src="<?php echo esc_url( $image_02 ); ?>"
					data-object-fit="cover" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:paragraph {"textColor":"white"} -->
					<p class="has-white-color has-text-color">
						<strong><?php echo esc_html_x( 'Extend your natural self, be proud of your greater self.', 'Sample text for the section', 'blockette' ); ?></strong>
						<?php echo esc_html_x( ' Don\'t hesitate to fascinate', 'Sample text for the section', 'blockette' ); ?>
						<br><?php echo esc_html_x( 'Everyone ...', 'Sample text for the section', 'blockette' ); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"fontSize":"small"} -->
						<div class="wp-block-button has-custom-font-size has-small-font-size">
							<a class="wp-block-button__link wp-element-button">
								<?php echo esc_html_x( 'Browse Hair Extensions', 'Sample text for the button', 'blockette' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
