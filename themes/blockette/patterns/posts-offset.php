<?php
/**
 * Title: Posts query offset (first featured)
 * Slug: blockette/posts-query-offset
 * Categories: blockette-query, query
 * Block Types: core/query
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:spacer {"height":"6vw"} -->
	<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","align":"wide"} -->
		<h2 class="alignwide has-text-align-center">
			<?php echo esc_html_x( 'News from our stores', 'Sample text for the heading', 'blockette' ); ?>
		</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-primary-secondary"} -->
	<div class="wp-block-group has-vertical-primary-secondary-gradient-background has-background"
		style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:spacer {"height":"2px"} -->
		<div style="height:2px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"2vw"} -->
	<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"65%"} -->
		<div class="wp-block-column" style="flex-basis:65%">
			<!-- wp:query {"queryId":7,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"align":"wide"} -->
				<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"40vw","className":"blockette-box-shadow-big blockette-rounded-corners"} /-->

				<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"foreground","fontSize":"x-large"} /-->

				<!-- wp:post-excerpt {"moreText":"\u003cmark style=\u0022background-color:rgba(0, 0, 0, 0)\u0022 class=\u0022has-inline-color has-primary-color\u0022\u003e→\u003c/mark\u003e <?php echo esc_html_x( 'Read more', 'Sample text for the excerpt Read more', 'blockette' ); ?>","textColor":"foreground"} /-->

				<!-- wp:spacer {"height":"2vw"} -->
				<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">
			<!-- wp:query {"queryId":7,"query":{"perPage":"2","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"align":"wide"} -->
				<!-- wp:post-featured-image {"isLink":true,"width":"","height":"150px","className":"blockette-box-shadow-big blockette-rounded-corners"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:spacer {"height":"2vw"} -->
					<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"0.5vw"}}},"textColor":"foreground","fontSize":"medium"} /-->

					<!-- wp:post-date {"style":{"typography":{"fontSize":"0.9rem"}}} /-->

					<!-- wp:post-excerpt {"moreText":"\u003cmark style=\u0022background-color:rgba(0, 0, 0, 0)\u0022 class=\u0022has-inline-color has-primary-color\u0022\u003e→\u003c/mark\u003e <?php echo esc_html_x( 'Read more', 'Sample text for the excerpt Read more', 'blockette' ); ?>","textColor":"foreground","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-dashed"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-dashed" />
				<!-- /wp:separator -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"2vw"} -->
	<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="#">Read all articles</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:spacer {"height":"6vw"} -->
	<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
