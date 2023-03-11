<?php
/**
 * Footer travel
 */
$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Footer travel', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"60px","right":"1.5rem","left":"1.5rem"}}},"backgroundColor":"background-light","layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:100px;padding-right:1.5rem;padding-bottom:60px;padding-left:1.5rem"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"33.333%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:33.333%"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}}} -->
			<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px","fontSize":"1.875rem","lineHeight":"1.5"}},"className":"ona-site-title","fontFamily":"base"} /-->

			<!-- wp:site-tagline {"textAlign":"left","style":{"typography":{"fontSize":"12px"}}} /--></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"20%"}}}} -->
			<div class="wp-block-group" style="padding-right:20%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
			<p style="font-size:1rem">' . __( 'Goddard Hall 81 Washington Square E,<br>New York, NY 10003, USA', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
			<p style="font-size:1rem">' . __( '1-888-925-8067 | help@onashop.com', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.333%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:33.333%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"base"} -->
			<h3 class="has-base-font-size" style="font-style:normal;font-weight:500">' . __( 'Popular Posts', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"postsToShow":2,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":100,"addLinkToFeaturedImage":true} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.333%"} -->
			<div class="wp-block-column" style="flex-basis:33.333%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"base"} -->
			<h3 class="has-base-font-size" style="font-style:normal;font-weight:500">' . __( 'Useful Links', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:navigation {"textColor":"text-regular","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"style":{"typography":{"fontSize":"1rem"},"spacing":{"blockGap":"6px"}}} -->
				<!-- wp:navigation-link {"label":"' . __( 'Amazing Experience', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Travel & Tours', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Tips & Guide', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Lifestyle', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Best Adventures', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Sea & Beach', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

			</div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"34px","bottom":"28px","right":"1.5rem","left":"1.5rem"}}},"layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group" style="padding-top:34px;padding-right:1.5rem;padding-bottom:28px;padding-left:1.5rem"><!-- wp:columns {"style":{"spacing":{"blockGap":"10px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"className":"ona-sm-down-text-align-center"} -->
			<div class="wp-block-column ona-sm-down-text-align-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"mb-1 ona-copyright","fontSize":"tiny"} -->
			<p class="mb-1 ona-copyright has-text-light-color has-text-color has-link-color has-tiny-font-size">' . sprintf( __( '© %d Ona, Made by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com" style="color:inherit">DeoThemes</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"ona-sm-down-text-align-center"} -->
			<div class="wp-block-column ona-sm-down-text-align-center"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"16px"}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
			
			<!-- wp:navigation {"textColor":"text-light","overlayMenu":"never","className":"ona-sm-down-justify-content-center","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"20px"}},"fontSize":"tiny"} -->
				<!-- wp:navigation-link {"label":"' . __( 'Privacy Policy', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Terms & Conditions', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			
			</div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



