<?php
/**
 * Title: 404
 * Slug: blockette/404
 * Categories: text
 * inserter: no
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"calc(var(--wp--custom--v-spacing, 1.25rem) *3)","bottom":"calc(var(--wp--custom--v-spacing, 1.25rem) *2)"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-top:calc(var(--wp--custom--v-spacing, 1.25rem) *3);padding-bottom:calc(var(--wp--custom--v-spacing, 1.25rem) *2)">

	<!-- wp:heading {"textAlign":"center","className":"is-style-blockette-text-shadow","fontSize":"big"} -->
	<h2 class="has-text-align-center is-style-blockette-text-shadow has-big-font-size">
		<?php echo esc_html_x( 'Page not found', 'Sample text for the heading', 'blockette' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">
		<?php echo esc_html_x( 'It looks like nothing was found at this location. Maybe try a search?', 'Sample text for the paragraph', 'blockette' ); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"secondary","className":"is-style-blockette-box-shadow"} -->
	<div class="wp-block-group is-style-blockette-box-shadow has-secondary-background-color has-background"
		style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
		<!-- wp:heading {"textAlign":"center","level":3,"className":"is-style-blockette-text-shadow","fontSize":"large"} -->
		<h3 class="has-text-align-center is-style-blockette-text-shadow has-large-font-size">
			Latest posts </h3>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":14,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
			<!-- wp:separator {"style":{"color":{"background":"#e0e0e0"}},"className":"alignwide is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background alignwide is-style-wide"
				style="background-color:#e0e0e0;color:#e0e0e0" />
			<!-- /wp:separator -->

			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"verticalAlignment":"center","width":"20%","layout":{"inherit":false}} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
					<!-- wp:post-date {"style":{"typography":{"fontSize":"1rem"}},"textColor":"primary"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1"},"color":{"link":"#ffffff"}},"textColor":"white","fontSize":"normal"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var(--wp--custom--v-spacing, 4vw)"} -->
	<div style="height:var(--wp--custom--v-spacing, 4vw)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</main>
<!-- /wp:group -->
