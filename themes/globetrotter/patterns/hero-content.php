<?php
 /**
  * Title: Hero Content
  * Slug: globetrotter/hero-content
  * Categories: globetrotter, page
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>","id":21551,"dimRatio":0,"focalPoint":{"x":"0.50","y":"0.50"},"align":"full","className":"wp-block-section wp-block-hero-content"} -->
<div class="wp-block-cover alignfull wp-block-section wp-block-hero-content">
   <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-21551" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/hero-content.jpg' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/>
   <div class="wp-block-cover__inner-container">
      <!-- wp:group {"style":{"color":{}},"layout":{"inherit":true}} -->
      <div class="wp-block-group">
         <!-- wp:media-text {"mediaPosition":"right","mediaLink":"","mediaType":"image","mediaWidth":41} -->
         <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 41%">
            <figure class="wp-block-media-text__media"><img src="" alt=""/></figure>
            <div class="wp-block-media-text__content">
               <!-- wp:group {"className":"wp-block-group-heading"} -->
               <div class="wp-block-group wp-block-group-heading">
                  <!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}}} -->
                  <h6 style="text-transform:uppercase"><?php esc_html_e ( 'Hero Content', 'globetrotter' ) ?></h6>
                  <!-- /wp:heading -->
                  <!-- wp:heading {"textColor":"foreground"} -->
                  <h2 class="has-foreground-color has-text-color"><?php esc_html_e ( 'Ultimate Safari Trips in Africa', 'globetrotter' ) ?></h2>
                  <!-- /wp:heading -->
               </div>
               <!-- /wp:group -->
               <!-- wp:columns -->
               <div class="wp-block-columns">
                  <!-- wp:column -->
                  <div class="wp-block-column">
                     <!-- wp:paragraph {"textColor":"body-text"} -->
                     <p class="has-body-text-color has-text-color"><?php esc_html_e ( 'Lorem ipsum dolor sit amet, consectetur Integer pretium condimentum tristique aenean luctus mauris lorem ipsum dolor sit amet consectetur.', 'globetrotter' ) ?></p>
                     <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:column -->
                  <!-- wp:column -->
                  <div class="wp-block-column">
                     <!-- wp:paragraph {"textColor":"body-text"} -->
                     <p class="has-body-text-color has-text-color"><?php esc_html_e ( 'Proin vel dui quis nunc mollis porttitor ut ut dolor. In hac habitasse platea dictumst. Curabitur eget molestie lacus. In hac habitasse platea dictumst.', 'globetrotter' ) ?></p>
                     <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:column -->
               </div>
               <!-- /wp:columns -->
               <!-- wp:buttons -->
               <div class="wp-block-buttons">
                  <!-- wp:button -->
                  <div class="wp-block-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Get Started', 'globetrotter' ) ?></a></div>
                  <!-- /wp:button -->
               </div>
               <!-- /wp:buttons -->
            </div>
         </div>
         <!-- /wp:media-text -->
      </div>
      <!-- /wp:group -->
   </div>
</div>
<!-- /wp:cover -->

