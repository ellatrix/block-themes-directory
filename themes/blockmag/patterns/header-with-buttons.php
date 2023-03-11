<?php
 /**
  * Title: Header With Buttons
  * Slug: blockmag/header-with-buttons
  * Categories: blockmag, header
  */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
   <!-- wp:group {"className":"wp-block-main-header","align":"full","layout":{"inherit":true}} -->
   <div class="wp-block-group alignfull wp-block-main-header">
      <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--tiny)","top":"var(--wp--custom--spacing--tiny)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
      <div class="wp-block-group alignwide"
         style="padding-top:var(--wp--custom--spacing--tiny);padding-bottom:var(--wp--custom--spacing--tiny)">
         <!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex"}} -->
         <div class="wp-block-group">
            <!-- wp:site-logo {"width":64} /-->
            <!-- wp:group -->
            <div class="wp-block-group">
               <!-- wp:site-title /-->
               <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"4px"}}}} /-->
            </div>
            <!-- /wp:group -->
         </div>
         <!-- /wp:group -->
         <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
         <!-- /wp:navigation -->
         <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
         <div class="wp-block-group">
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
               <!-- wp:button {"className":"is-style-button"} -->
               <div class="wp-block-button is-style-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Log in', 'blockmag' ) ?></a></div>
               <!-- /wp:button -->
               <!-- wp:button {"className":"is-style-outline"} -->
               <div class="wp-block-button is-style-outline"><a class="wp-block-button__link"><?php esc_html_e ( 'Get Started', 'blockmag' ) ?></a></div>
               <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
         </div>
         <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
   </div>
   <!-- /wp:group -->
</div>
<!-- /wp:group -->
