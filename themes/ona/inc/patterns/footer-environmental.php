<?php
/**
 * Footer environmental
 */
$form = ona_get_mailchimp_forms( 'style-2' );

return array(
	'title'      => __( 'Footer environmental', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px"}}},"backgroundColor":"foreground"} -->
			<div class="wp-block-group has-foreground-background-color has-background" style="padding-top:100px"><!-- wp:group {"layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"68px"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:68px"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"}},"textColor":"background","fontSize":"large"} -->
			<h2 class="has-background-color has-text-color has-large-font-size" id="join-the-newsletter-to-get-the-daily-tips-latest-articles-and-free-stuffs-delivered-directly-to-your-inbox" style="line-height:1.2">' . __( 'Subscribe to New Posts', 'ona' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"5%"} -->
			<div class="wp-block-column" style="flex-basis:5%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">

			' . $form . '
			
			</div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:separator {"style":{"color":{"background":"#2b2d31"}},"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#2b2d31;color:#2b2d31"/>
			<!-- /wp:separator --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"60px","top":"60px"}}},"layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"46%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:46%"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}}} -->
			<div class="wp-block-group"><!-- wp:site-logo {"width":128} /--></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"20%"}}}} -->
			<div class="wp-block-group" style="padding-right:20%"><!-- wp:paragraph {"textColor":"background","fontSize":"small"} -->
			<p class="has-background-color has-text-color has-small-font-size">' . __( 'A minimal, functional theme. All the latest news and creative articles are available at our news portal to encourage inspiration.', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"18%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:18%">
		
			<!-- wp:navigation {"textColor":"background","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"16px"},"typography":{"fontSize":"1.125rem"}}} -->
				<!-- wp:home-link {"label":"' . __( 'Home', 'ona' ) . '"} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Authors', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->			
			
			</div><!-- /wp:column -->

			<!-- wp:column {"width":"18%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:18%">
			
			<!-- wp:navigation {"textColor":"background","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"16px"},"typography":{"fontSize":"1.125rem"}}} -->
				<!-- wp:navigation-link {"label":"' . __( 'Demos', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Team', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'News', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Get Theme', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
			
			</div><!-- /wp:column -->

			<!-- wp:column {"width":"18%"} -->
			<div class="wp-block-column" style="flex-basis:18%">
			
			<!-- wp:navigation {"textColor":"background","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"16px"},"typography":{"fontSize":"1.125rem"}}} -->
				<!-- wp:navigation-link {"label":"' . __( 'Facebook', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Twitter', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Linkedin', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Dribbble', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
			
			</div><!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px"}}},"layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group" style="padding-bottom:20px"><!-- wp:group {"style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"ona-copyright","fontSize":"tiny"} -->
			<p class="ona-copyright has-text-light-color has-text-color has-link-color has-tiny-font-size">' . sprintf( __( '© %d Ona, Made by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com" style="color:inherit">DeoThemes</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:navigation {"textColor":"text-light","overlayMenu":"never","className":"ona-sm-down-justify-content-center","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"20px"}},"fontSize":"tiny"} -->
				<!-- wp:navigation-link {"label":"' . __( 'Privacy Policy', 'ona' ) . '","url":"Privacy%20Policy","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . __( 'Terms \u0026amp; Conditions', 'ona' ) . '","url":"Terms%20\u0026%20Conditions","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
			
			</div><!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);



