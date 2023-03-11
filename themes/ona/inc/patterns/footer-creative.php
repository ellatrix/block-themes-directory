<?php
/**
 * Footer creative
 */
return array(
	'title'      => __( 'Footer creative', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"backgroundColor":"foreground","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group has-foreground-background-color has-background"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:spacer {"height":64} -->
			<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:navigation {"overlayMenu":"never","textColor":"background","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"className":"ona-text-letter-spacing","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
			<!-- wp:home-link {"label":"' . __( 'Home', 'ona' ) . '"} /-->
			<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","type":"page","id":224,"url":"#","kind":"post-type","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","type":"page","id":224,"url":"#","kind":"post-type","isTopLevelLink":true} /-->

			<!-- /wp:navigation -->

			<!-- wp:spacer {"height":80} -->
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"10px","fontSize":"1.875rem","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"ona-site-title","fontFamily":"base"} /-->

			<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"fontSize":"0.9375rem"}},"textColor":"background"} /-->

			<!-- wp:spacer {"height":64} -->
			<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"1rem"}}}} -->
			<div class="wp-block-columns" style="margin-bottom:1rem"><!-- wp:column {"className":"ona-sm-down-text-align-center"} -->
			<div class="wp-block-column ona-sm-down-text-align-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"mb-1 ona-copyright","fontSize":"tiny"} -->
			<p class="mb-1 ona-copyright has-text-light-color has-text-color has-link-color has-tiny-font-size">' . sprintf( __( '© %d Ona, Made by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com" style="color:inherit">DeoThemes</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:navigation {"overlayMenu":"never","textColor":"text-light","className":"ona-sm-down-justify-content-center","style":{"spacing":{"blockGap":"20px"}},"fontSize":"tiny"} -->
			<!-- wp:navigation-link {"label":"' . __( 'Privacy Policy', 'ona' ) . '","url":"Privacy%20Policy","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"' . __( 'Terms \u0026amp; Conditions', 'ona' ) . '","url":"Terms%20\u0026%20Conditions","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000","className":"ona-sm-down-justify-content-center","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"10px"}}} -->
			<ul class="wp-block-social-links has-icon-background-color ona-sm-down-justify-content-center"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



