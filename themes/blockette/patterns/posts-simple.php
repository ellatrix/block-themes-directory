<?php
/**
 * Title: Simple posts query
 * Slug: blockette/posts-query-simple
 * Categories: blockette-query, query
 * Block Types: core/query
 * Viewport Width: 1024
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:spacer {"height":"6vw"} -->
	<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"gradient":"vertical-primary-secondary"} -->
	<div class="wp-block-group has-vertical-primary-secondary-gradient-background has-background"
		style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:spacer {"height":"5px"} -->
		<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","level":3,"align":"wide"} -->
		<h3 class="alignwide has-text-align-center">
			<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color">→</mark>
			<?php echo esc_html_x( 'Our latest stories', 'Sample text for the heading', 'blockette' ); ?>
		</h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"blockette-animate blockette-move-left"} -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"width":"100vw","height":"","className":"blockette-box-shadow-big blockette-rounded-corners"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"0.5vw"}}},"textColor":"foreground","fontSize":"medium"} /-->

				<!-- wp:post-date {"style":{"typography":{"fontSize":"0.9rem"}}} /-->

				<!-- wp:post-excerpt {"moreText":"\u003cmark style=\u0022background-color:rgba(0, 0, 0, 0)\u0022 class=\u0022has-inline-color has-primary-color\u0022\u003e→\u003c/mark\u003e <?php echo esc_html_x( 'Read more', 'Sample text for the excerpt Read more', 'blockette' ); ?>","textColor":"foreground","fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"2vw"} -->
		<div style="height:2vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:separator {"className":"is-style-dashed"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-dashed" />
		<!-- /wp:separator -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
