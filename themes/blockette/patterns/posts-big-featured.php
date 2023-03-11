<?php
/**
 * Title: Posts query - big featured image
 * Slug: blockette/posts-big-featured
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
		<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"big"} -->
		<h2 class="alignwide has-text-align-center has-big-font-size">
			<?php echo esc_html_x( 'Posts with big featured image', 'Sample text for the heading', 'blockette' ); ?>
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

	<!-- wp:group -->
	<div class="wp-block-group">
		<!-- wp:query {"queryId":7,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"align":"wide"} -->
			<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"50vw","className":"blockette-box-shadow-big blockette-rounded-corners"} /-->

			<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"foreground","fontSize":"large"} /-->

			<!-- wp:post-date {"textAlign":"center","fontSize":"small"} /-->

			<!-- wp:post-excerpt {"moreText":"\u003cmark style=\u0022background-color:rgba(0, 0, 0, 0)\u0022 class=\u0022has-inline-color has-primary-color\u0022\u003e→\u003c/mark\u003e <?php echo esc_html_x( 'Read more', 'Sample text for excerpt Read more', 'blockette' ); ?>","textColor":"foreground"} /-->

			<!-- wp:separator {"className":"is-style-dashed"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-dashed" />
			<!-- /wp:separator -->

			<!-- wp:spacer {"height":"2vw"} -->
			<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
