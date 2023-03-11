<?php
/**
 * Header minimal
 */
return array(
	'title'      => __( 'Header minimal', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"30px","bottom":"30px"}}},"backgroundColor":"background-light","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:30px;padding-right:4%;padding-bottom:30px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"ona-sm-down-order-2"} -->
			<div class="wp-block-column is-vertically-aligned-center ona-sm-down-order-2" style="flex-basis:40%">
			<!-- wp:navigation {"overlayMenu":"mobile","className":"ona-sm-down-justify-content-end"} -->
				<!-- wp:home-link {"label":"' . __( 'Home', 'ona' ) . '"} /-->
				<!-- wp:navigation-link {"label":"' . __( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelItem":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"spacing":{"blockGap":"6px"}},"className":"ona-sm-down-order-1"} -->
			<div class="wp-block-column is-vertically-aligned-center ona-sm-down-order-1" style="flex-basis:20%"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"5px"}},"className":"ona-site-title ona-sm-down-text-align-left","fontSize":"medium","fontFamily":"base"} /-->

			<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"fontSize":"12px"}},"className":"ona-sm-down-text-align-left"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"hide-sm-down"} -->
			<div class="wp-block-column is-vertically-aligned-center hide-sm-down" style="flex-basis:40%"><!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"10px"}}} -->
			<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



