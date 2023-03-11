<?php
/**
 * Title: Site header
 * Slug: prowp/site-header-default
 * Categories: header
 * Keywords: site header
 * Block Types: core/columns
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"shouldSyncIcon":true} /-->
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"icon":"menu","fontSize":"normal"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"wide","backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
