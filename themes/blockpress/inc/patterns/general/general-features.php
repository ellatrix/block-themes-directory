<?php
/**
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Features with 4 columns', 'blockpress' ),
	'categories'    => array( 'blockpress-general' ),
 
	'content'       => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"80px"}},"color":{"background":"#f5f4fe"}},"className":"is-style-no-margin","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-no-margin has-background" style="background-color:#f5f4fe;padding-bottom:80px"><!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"35px"},"blockGap":"20px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-bottom:35px"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","className":"fr-animate fr-move-up","fontSize":"small"} -->
<p class="has-text-align-center fr-animate fr-move-up has-primary-color has-text-color has-small-font-size" style="text-transform:uppercase">Why we are the best</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"color":{"text":"#111111"}},"className":"fr-animate fr-flip fr-delay-3","fontSize":"max-huge"} -->
<p class="has-text-align-center fr-animate fr-flip fr-delay-3 has-text-color has-max-huge-font-size" style="color:#111111;font-style:normal;font-weight:700;line-height:1.2">Find our our special unique features</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"70px","left":"70px"}}},"frMobPaddingDisable":true} -->
<div class="wp-block-group fr-mobile-paddingdisable" style="padding-right:70px;padding-left:70px"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#252525"}},"className":"fr-animate fr-move-up fr-delay-5"} -->
<p class="has-text-align-center fr-animate fr-move-up fr-delay-5 has-text-color" style="color:#252525">We\'ve gone over everything you could possibly want to have. You are one step closer to success</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"fr-animate fr-move-up"} -->
<div class="wp-block-column fr-animate fr-move-up"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"blockGap":"45px"},"border":{"width":"1px","style":"solid"},"color":{"background":"#ffffff","text":"#0b0b0b"}},"borderColor":"lightborder","className":"is-style-hovershadow"} -->
<div class="wp-block-group is-style-hovershadow has-border-color has-lightborder-border-color has-text-color has-background" style="background-color:#ffffff;border-style:solid;border-width:1px;color:#0b0b0b;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":6492,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#7000f4","#2184f9"]}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/features-1.svg" alt="" class="wp-image-6492" width="60" height="60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"big"} -->
<p class="has-big-font-size" style="font-style:normal;font-weight:400">Animation Framework</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">Easily add predefined or custom animations to any block. Choose between regular, on scroll or GSAP js.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-link-color has-small-font-size"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"fr-animate fr-move-up fr-delay-3"} -->
<div class="wp-block-column fr-animate fr-move-up fr-delay-3"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"blockGap":"45px"},"border":{"width":"1px","style":"solid"},"color":{"background":"#ffffff","text":"#0b0b0b"}},"borderColor":"lightborder","className":"is-style-hovershadow"} -->
<div class="wp-block-group is-style-hovershadow has-border-color has-lightborder-border-color has-text-color has-background" style="background-color:#ffffff;border-style:solid;border-width:1px;color:#0b0b0b;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":6680,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#7000f4","#2184f9"]}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/features-2.svg" alt="" class="wp-image-6680" width="60" height="60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"big"} -->
<p class="has-big-font-size" style="font-style:normal;font-weight:400">Mobile optimized</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">Improved Mobile optimized layouts and special Mobile responsive options to make different look for gadgets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-link-color has-small-font-size"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"fr-animate fr-move-up fr-delay-5"} -->
<div class="wp-block-column fr-animate fr-move-up fr-delay-5"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"blockGap":"45px"},"border":{"width":"1px","style":"solid"},"color":{"background":"#ffffff","text":"#0b0b0b"}},"borderColor":"lightborder","className":"is-style-hovershadow"} -->
<div class="wp-block-group is-style-hovershadow has-border-color has-lightborder-border-color has-text-color has-background" style="background-color:#ffffff;border-style:solid;border-width:1px;color:#0b0b0b;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":6496,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#7000f4","#2184f9"]}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/features-3.svg" alt="" class="wp-image-6496" width="60" height="60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"big"} -->
<p class="has-big-font-size" style="font-style:normal;font-weight:400">Area variants</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">Choose predefined patterns, headers, footers, single page styles, core block styles, presets and colors.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-link-color has-small-font-size"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":" fr-animate fr-move-up fr-delay-7"} -->
<div class="wp-block-column  fr-animate fr-move-up fr-delay-7"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"blockGap":"45px"},"border":{"width":"1px","style":"solid"},"color":{"background":"#ffffff","text":"#0b0b0b"}},"borderColor":"lightborder","className":"is-style-hovershadow"} -->
<div class="wp-block-group is-style-hovershadow has-border-color has-lightborder-border-color has-text-color has-background" style="background-color:#ffffff;border-style:solid;border-width:1px;color:#0b0b0b;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":6497,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#7000f4","#2184f9"]}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/features-4.svg" alt="" class="wp-image-6497" width="60" height="60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"big"} -->
<p class="has-big-font-size" style="font-style:normal;font-weight:400">Only 2kb required</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">Theme uses special conditional asset loading. it means that all styles and scripts are generated on fly.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-link-color has-small-font-size"><a href="#">Learn more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#0b0b0b"}}} -->
<p class="has-text-align-center has-text-color" style="color:#0b0b0b">Didn\'t find what you need?</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"border":{"radius":"3px"}},"className":"is-style-fill-white"} -->
<div class="wp-block-button aligncenter is-style-fill-white"><a class="wp-block-button__link" style="border-radius:3px">Browse all categories</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"65px"} -->
<div style="height:65px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":6502,"width":143,"height":59,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/logoipsum-logo-1.svg" alt="" class="wp-image-6502" width="143" height="59"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":6503,"width":134,"height":55,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/logoipsum-logo-2.svg" alt="" class="wp-image-6503" width="134" height="55"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":6504,"width":135,"height":56,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/logoipsum-logo-3.svg" alt="" class="wp-image-6504" width="135" height="56"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","width":124,"height":51,"id":6505,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
    <div class="wp-block-image"><figure class="aligncenter is-resized size-full"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/logoipsum-logo-4.svg" alt="" width="124" height="51" class="wp-image-6505"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":6506,"width":130,"height":54,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="'.BLOCKPRESS_THEME_DIR.'/assets/patterns/logoipsum-logo-5.svg" alt="" class="wp-image-6506" width="130" height="54"/></figure></div>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
