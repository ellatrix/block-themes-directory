<?php
/**
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'QA section with video', 'blockpress' ),
	'categories'    => array( 'blockpress-general' ),
 
	'content'       => '
	<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide", "verticalAlignment":"center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"30px","padding":{"top":"35px","right":"35px","bottom":"35px","left":"35px"}},"border":{"radius":"8px","width":"1px","style":"solid"}},"borderColor":"lightborder","className":"fr-animate fr-move-right is-style-hardprimaryshadow"} -->
<div class="wp-block-group fr-animate fr-move-right is-style-hardprimaryshadow has-border-color has-lightborder-border-color" style="border-radius:8px;border-style:solid;border-width:1px;padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:700">Questions and answers</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"customColor":"#f8f8f8","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#f8f8f8;color:#f8f8f8"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","backgroundColor":"primary","textColor":"textonprimary","className":"is-style-roundsmall","fontSize":"big"} -->
<p class="has-text-align-center is-style-roundsmall has-textonprimary-color has-primary-background-color has-text-color has-background has-big-font-size">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"big"} -->
<p class="has-primary-color has-text-color has-big-font-size">Is it free product?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Yes, it\'s free and will be always free. We don\'t plan to sell functionality, we plan to sell only extra blocks and Starter site packs</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","backgroundColor":"primary","textColor":"textonprimary","className":"is-style-roundsmall","fontSize":"big"} -->
<p class="has-text-align-center is-style-roundsmall has-textonprimary-color has-primary-background-color has-text-color has-background has-big-font-size">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"big"} -->
<p class="has-primary-color has-text-color has-big-font-size">What is Block based theme?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>It\'s new way how Wordpress themes are working and loaded. Everything is based on blocks and you can change/replace any part of site in Editor without using extra plugins.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","backgroundColor":"primary","textColor":"textonprimary","className":"is-style-roundsmall","fontSize":"big"} -->
<p class="has-text-align-center is-style-roundsmall has-textonprimary-color has-primary-background-color has-text-color has-background has-big-font-size">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"big"} -->
<p class="has-primary-color has-text-color has-big-font-size">Do we need to use plugins for this page?</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>This page is made totally in theme without using any plugins. However we recommend to install Greenshift page builder to extend design possibilities. It\'s free and bundled with theme</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"25%"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":6569,"width":75,"height":75,"sizeSlug":"full","linkDestination":"none","className":"fr-animate fr-move-up fr-delay-3 fr-negative-margin-bottom-5", "style":{"color":{"duotone":["#c1e5d8","#2184f9"]}}} -->
<figure class="wp-block-image size-full is-resized fr-animate fr-move-up fr-delay-3 fr-negative-margin-bottom-5"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/qa-1.svg" width="75" height="75" alt="" class="wp-image-6569"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":6570,"sizeSlug":"full","width":75,"height":75,"linkDestination":"none","className":"fr-negative-margin-3 fr-animate fr-move-up fr-delay-5", "style":{"color":{"duotone":["#fed54b","#2184f9"]}}} -->
<figure class="wp-block-image size-full fr-negative-margin-3 is-resized fr-animate fr-move-up fr-delay-5"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/qa-2.svg" width="75" height="75" alt="" class="wp-image-6570"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":6572,"sizeSlug":"full","width":75,"height":75,"linkDestination":"none","className":"fr-negative-margin-bottom-10 fr-animate fr-move-up fr-delay-10", "style":{"color":{"duotone":["#fe835d","#2184f9"]}}} -->
<figure class="wp-block-image size-full is-resized fr-negative-margin-bottom-10 fr-animate fr-move-up fr-delay-10"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/qa-3.svg" width="75" height="75" alt="" class="wp-image-6572"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"center","id":2932,"width":400,"height":400,"sizeSlug":"full","linkDestination":"none","className":"fr-animate fr-move-up is-style-default fr-delay-5"} -->
<figure class="wp-block-image aligncenter size-full is-resized fr-animate fr-move-up is-style-default fr-delay-5"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/faq.webp" alt="" class="wp-image-2932" width="400" height="400"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
