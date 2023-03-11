<?php
/**
 * Header centered logo
 */
return array(
	'title'      => __( 'Header centered logo', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"30px","bottom":"30px"}}},"layout":{"inherit":false}} -->
			<div class="wp-block-group" style="padding-top:30px;padding-right:4%;padding-bottom:30px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"80%","style":{"spacing":{"blockGap":"4px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"10px"}},"className":"ona-site-title","fontFamily":"base"} /-->

			<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"fontSize":"12px"}}} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%">
			
			<!-- wp:navigation {"itemsJustification":"center","overlayMenu":"mobile"} -->
				<!-- wp:navigation-link {"label":"' . __( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelItem":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			</div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



