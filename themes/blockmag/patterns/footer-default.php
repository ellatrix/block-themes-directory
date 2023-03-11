<?php
 /**
  * Title: Footer Default
  * Slug: blockmag/footer-default
  * Categories: blockmag, footer
  */
?>
<!-- wp:group {"className":"footer-dark","align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull footer-dark">
   <!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true}} -->
   <div class="wp-block-group alignfull wp-block-footer  wp-block-site-generator">
      <!-- wp:group {"align":"wide","className":"wp-block-site-info","layout":{"type":"flex","justifyContent":"space-between"}} -->
      <div class="wp-block-group alignwide wp-block-site-info">
         <!-- wp:paragraph -->
         <p><?php printf(
            _x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'blockmag' ),
            esc_attr( date_i18n( __( 'Y', 'blockmag' ) ) ),
            '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a><span class="sep"> </span>  by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>' ); ?></p>
         <!-- /wp:paragraph -->
         
               <!-- wp:group -->
               <div class="wp-block-group">
                  <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
                  <ul class="wp-block-social-links has-icon-color is-style-logos-only">
                     <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                     <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                     <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                  </ul>
                  <!-- /wp:social-links -->
               </div>
               <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
   </div>
   <!-- /wp:group -->
</div>
<!-- /wp:group -->

