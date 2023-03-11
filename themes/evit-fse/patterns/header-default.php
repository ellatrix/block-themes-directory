<?php
 /**
  * Title: Default Header
  * Slug: evit-fse/header-default
  * Categories: evit-fse
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:columns {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#dfdfdf","width":"2px"}}},"backgroundColor":"white","fontSize":"small"} -->
<div class="wp-block-columns has-white-background-color has-background has-small-font-size" style="border-bottom-color:#dfdfdf;border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0px;padding-bottom:var(--wp--preset--spacing--50);padding-left:0px;font-style:normal;font-weight:500;text-transform:uppercase"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:0;flex-basis:25%"><!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foreground"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"0.4","textDecoration":"none","textTransform":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"textColor":"foreground","layout":{"type":"default"},"fontFamily":"heebo"} -->
<div class="wp-block-column is-vertically-aligned-center has-foreground-color has-text-color has-link-color has-heebo-font-family" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700;line-height:0.4;text-decoration:none;text-transform:none;flex-basis:50%">
<!-- wp:navigation {"icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"style":{"spacing":{}}} -->

<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Shop","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","justifyContent":"center","contentSize":"120px"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:25%"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","hasHiddenPrice":true,"className":"mini-cart","textColor":"foreground"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":261,"width":30,"height":30,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}},"className":"search-sidebar"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border search-sidebar"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/search.png" alt="" class="wp-image-261" style="border-style:none;border-width:0px" width="30" height="30"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":262,"width":30,"height":30,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}},"className":"about-sidebar"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border about-sidebar"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/dots.png" alt="" class="wp-image-262" style="border-style:none;border-width:0px" width="30" height="30"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"search","theme":"evit-fse"} /-->

<!-- wp:template-part {"slug":"about","theme":"evit-fse"} /-->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="overlay" class="wp-block-group"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->