<?php
/**
 * Header travel
 */
return array(
	'title'      => __( 'Header travel', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"14px","bottom":"14px","right":"1.5rem","left":"1.5rem"}}},"backgroundColor":"secondary","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:14px;padding-right:1.5rem;padding-bottom:14px;padding-left:1.5rem"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
			<!-- wp:navigation {"textColor":"foreground","className":"is-style-default","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"46px"}}} -->
				<!-- wp:navigation-link {"label":"' . __( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelItem":false} /-->
			<!-- /wp:navigation -->

			</div><!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"is-style-default"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-default" style="flex-basis:25%"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","iconBackgroundColor":"background","iconBackgroundColorValue":"#ffffff","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"10px"}}} -->
			<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem","top":"44px","bottom":"44px"}}},"layout":{"inherit":false,"contentSize":""}} -->
			<div class="wp-block-group" style="padding-top:44px;padding-right:1.5rem;padding-bottom:44px;padding-left:1.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"6px"}}} -->
			<div class="wp-block-group"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"1.75rem","letterSpacing":"4px"}},"className":"ona-site-title"} /-->

			<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"fontSize":"12px"}}} /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);



