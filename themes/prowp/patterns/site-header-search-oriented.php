<?php
/**
 * Title: Site header with search form and link
 * Slug: prowp/site-header-search-oriented
 * Categories: header
 * Keywords: site header
 * Block Types: core/columns
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|60","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo /-->
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","fontSize":"normal"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
			<!-- wp:paragraph {"fontSize":"normal"} -->
			<p class="has-normal-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html_x( 'Go back to home page', 'Sample text for link shown in site header with search form', 'prowp' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:separator {"align":"wide","backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
