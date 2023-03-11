<?php
 /**
  * Title: CTA
  * Slug: shoplaza/cta
  * Categories: shoplaza, page
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/cta-bg.jpg' ); ?>","dimRatio":40,"align":"full","className":"wp-block-section wp-block-cta"} -->
<div class="wp-block-cover alignfull wp-block-section wp-block-cta">
   <span aria-hidden="true" class="has-background-dim-40 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/cta-bg.jpg' ); ?>" data-object-fit="cover"/>
   <div class="wp-block-cover__inner-container">
      <!-- wp:group {"layout":{"inherit":true}} -->
      <div class="wp-block-group">
         <!-- wp:group -->
         <div class="wp-block-group">
            <!-- wp:group {"className":"wp-block-group-heading"} -->
            <div class="wp-block-group wp-block-group-heading">

               <!-- wp:heading {"textAlign":"center"} -->
               <h2 class="has-text-align-center"><?php esc_html_e ( 'World’s best clothes
collections for you.', 'shoplaza' ) ?></h2>
               <!-- /wp:heading -->
               <!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
               <p class="has-text-align-center has-normal-font-size"><?php esc_html_e ( 'Unique collections for premium products
starting from affordable price.', 'shoplaza' ) ?></p>
               <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
               <!-- wp:button -->
               <div class="wp-block-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Get Offer', 'shoplaza' ) ?></a></div>
               <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
         </div>
         <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
   </div>
</div>
<!-- /wp:cover -->
