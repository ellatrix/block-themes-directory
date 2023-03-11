<?php
/**
 * Title: Dummy navigation
 * Slug: blockette/dummy-navigation
 * Categories: blockette-header, blockette-footer
 * Block Types: core/navigation
 * inserter: no
 *
 * @package blockette
 * @since 1.0.0
 */

?>

<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","style":{"spacing":{"blockGap":"1vw"}},"fontSize":"small"} -->
	<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom","isTopLevelLink":true} /-->

	<!-- wp:navigation-link {"label":"Dummy item","url":"#","kind":"custom","isTopLevelLink":true} /-->

	<!-- wp:navigation-submenu {"label":"Subitems","url":"#","kind":"custom","isTopLevelItem":true} -->
		<!-- wp:navigation-link {"label":"Nav item 1","url":"#","kind":"custom","isTopLevelLink":false} /-->
		<!-- wp:navigation-link {"label":"Nav item 2","url":"#","kind":"custom","isTopLevelLink":false} /-->
	<!-- /wp:navigation-submenu -->

	<!-- wp:navigation-submenu {"label":"Submenu","url":"#","kind":"custom","isTopLevelItem":true} -->
		<!-- wp:navigation-link {"label":"Nav item 1","url":"#","kind":"custom","isTopLevelLink":false} /-->
		<!-- wp:navigation-link {"label":"Nav item 2","url":"#","kind":"custom","isTopLevelLink":false} /-->
	<!-- /wp:navigation-submenu -->

<!-- /wp:navigation -->

<!-- wp:loginout /-->

<?php if ( defined( 'WC_PLUGIN_FILE' ) ) { ?>
	<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","hasHiddenPrice":true,"fontSize":"small"} /-->
	<?php
}
