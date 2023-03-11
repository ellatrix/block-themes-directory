<?php
/**
 * Title: Dummy navigation overlay menu icon
 * Slug: blockette/dummy-navigation-overlay
 * Categories: blockette-header, blockette-footer
 * Block Types: core/navigation
 * inserter: no
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"1.5vw"}},"fontSize":"small"} -->
	<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom","isTopLevelLink":true} /-->

	<!-- wp:navigation-link {"label":"Dummy nav","url":"#","kind":"custom","isTopLevelLink":true} /-->

	<!-- wp:navigation-submenu {"label":"News","url":"#","kind":"custom","isTopLevelItem":true} -->
		<!-- wp:navigation-link {"label":"Archive","url":"#","kind":"custom","isTopLevelLink":false} /-->
		<!-- wp:navigation-link {"label":"Single Post","url":"#","kind":"custom","isTopLevelLink":false} /-->
	<!-- /wp:navigation-submenu -->

	<!-- wp:navigation-submenu {"label":"Pages","url":"#","kind":"custom","isTopLevelItem":true} -->
		<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":false} /-->
		<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":false} /-->
	<!-- /wp:navigation-submenu -->

<!-- /wp:navigation -->

<!-- wp:loginout /-->

<?php if ( defined( 'WC_PLUGIN_FILE' ) ) { ?>
	<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","hasHiddenPrice":true,"fontSize":"small"} /-->
	<?php
}
