<?php
/**
 * Title: Site footer
 * Slug: prowp/site-footer-default
 * Categories: footer
 * Keywords: footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:separator {"align":"wide","backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search website ...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"base","textColor":"contrast","fontSize":"normal"} /-->
	<!-- wp:separator {"align":"wide","backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"medium"} /-->
	<!-- wp:separator {"align":"wide","backgroundColor":"tertiary","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group alignwide has-small-font-size">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( '© 2022', 'Sample copyright year for footer area', 'prowp' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:navigation {"overlayMenu":"never"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","size":"has-normal-icon-size","style":{"spacing":{}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://twitter.com/themesharbor?lang=en","service":"twitter"} /-->
			<!-- wp:social-link {"url":"https://themesharbor.com/","service":"WordPress"} /-->
			<!-- wp:social-link {"url":"https://www.instagram.com/themesharbor/?hl=en","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
