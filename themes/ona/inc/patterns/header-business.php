<?php
/**
 * Header business
 */
return array(
	'title'      => __( 'Header business', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"24px","bottom":"24px"}}},"layout":{"inherit":false,"contentSize":""}} -->
			<div class="wp-block-group" style="padding-top:24px;padding-right:4%;padding-bottom:24px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:site-logo {"width":128,"shouldSyncIcon":false,"className":"ona-sm-down-text-align-left"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:navigation {"textColor":"foreground","className":"ona-sm-down-justify-content-end is-style-ona-tablet-justify-center","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<!-- wp:navigation-link {"label":"' . __( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelItem":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"is-style-ona-hide-on-mobile"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-ona-hide-on-mobile" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#newsletter">' . __( 'Contact Us', 'ona' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);




