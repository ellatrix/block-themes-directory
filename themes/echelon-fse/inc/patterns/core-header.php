<?php
/**
 * Gutenverse content.
 */
return array(
	'title'      => __( 'Core Header', 'echelon-fse' ),
	'categories' => array( 'echelon-fse-basic' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"10px","left":"10px"}}},"backgroundColor":"fourth","layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group has-fourth-background-color has-background" style="padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:10px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"28px"}},"textColor":"third"} /-->

<!-- wp:navigation {"className":"is-style-customnav","layout":{"type":"flex","orientation":"horizontal"},"style":{"typography":{"fontSize":"15px"},"spacing":{"blockGap":"35px"}},"fontFamily":"primary"} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-submenu {"label":"Parent Page","url":"#","kind":"custom","isTopLevelItem":true} -->
<!-- wp:navigation-link {"label":"Sub-Page","url":"#","kind":"custom","isTopLevelLink":false} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Contact Us","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"30px","right":"30px"}},"typography":{"fontSize":"15px"}},"className":"is-style-custombuttonone"} -->
<div class="wp-block-button has-custom-font-size is-style-custombuttonone" style="font-size:15px"><a class="wp-block-button__link" href="#" style="border-radius:0px;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px">Contact Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
