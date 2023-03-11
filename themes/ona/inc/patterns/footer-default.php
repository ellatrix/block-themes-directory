<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"backgroundColor":"foreground","layout":{"inherit":false}} -->
			<div class="wp-block-group has-foreground-background-color has-background"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
			<div class="wp-block-column" style="flex-basis:100%"><!-- wp:spacer {"height":64} -->
			<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"18px","fontSize":"40px","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"ona-site-title","fontFamily":"base"} /-->

			<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"fontSize":"12px"}},"textColor":"text-light"} /-->

			<!-- wp:spacer {"height":24} -->
			<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:image {"id":125,"width":94,"height":96,"sizeSlug":"full","linkDestination":"none","className":"text-center"} -->
			<figure class="wp-block-image size-full is-resized text-center"><img src="' . esc_url( get_theme_file_uri( 'assets/img/ona_follow.png' ) ) . '" alt="ona_follow" class="wp-image-125" width="94" height="96"/></figure>
			<!-- /wp:image -->

			<!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
			<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links -->

			<!-- wp:paragraph {"align":"center","textColor":"text-light","className":"mb-1","fontSize":"tiny"} -->
			<p class="has-text-align-center mb-1 has-text-light-color has-text-color has-tiny-font-size">' . sprintf( __( '© %d Ona — Made by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com" style="color:inherit">DeoThemes</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:navigation {"textColor":"text-light","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"20px"}},"fontSize":"tiny"} -->

			<!-- wp:navigation-link {"label":"' . __( 'Privacy Policy', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
			<!-- wp:navigation-link {"label":"' . __( 'Terms & Conditions', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->

			<!-- /wp:navigation -->

			<!-- wp:spacer {"height":16} -->
			<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



