<?php
 /**
  * Title: Featured Content
  * Slug: globetrotter/featured-content
  * Categories: globetrotter, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-feature-content","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-feature-content">
   <!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
   <div class="wp-block-group alignwide wp-block-group-heading">
      <!-- wp:columns {"align":"wide"} -->
      <div class="wp-block-columns alignwide">
         <!-- wp:column {"width":"66.66%"} -->
         <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:group {"className":"wp-block-heading-has-columns"} -->
            <div class="wp-block-group wp-block-heading-has-columns">
               <!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}}} -->
               <h6 style="text-transform:uppercase"><?php esc_html_e ( 'Featured Content', 'globetrotter' ) ?></h6>
               <!-- /wp:heading -->
               <!-- wp:heading -->
               <h2><?php esc_html_e ( 'Read Recent Posts', 'globetrotter' ) ?></h2>
               <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
         </div>
         <!-- /wp:column -->
         <!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
         <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%">
            <!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"bottom","justifyContent":"right"}} -->
            <div class="wp-block-buttons">
               <!-- wp:button {"className":"is-style-button"} -->
               <div class="wp-block-button is-style-button"><a class="wp-block-button__link"><?php esc_html_e ( 'View All Posts', 'globetrotter' ) ?></a></div>
               <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
         </div>
         <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
   </div>
   <!-- /wp:group -->
   <!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
   <div class="wp-block-group alignwide wp-block-group-content">
      <!-- wp:columns {"align":"wide"} -->
      <div class="wp-block-columns alignwide">
         <!-- wp:column -->
         <div class="wp-block-column">
            <!-- wp:group {"className":"wp-block-post-group"} -->
            <div class="wp-block-group wp-block-post-group">
               <!-- wp:image {"id":21468,"sizeSlug":"full","linkDestination":"none"} -->
               <figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/featured-content-1.jpg' ); ?>" alt="" class=""/></figure>
               <!-- /wp:image -->
               <!-- wp:group {"className":"wp-block-entry-content"} -->
               <div class="wp-block-group wp-block-entry-content">
                  <!-- wp:heading {"fontSize":"content-heading"} -->
                  <h2 class="has-content-heading-font-size"><?php esc_html_e ( 'Agile frameworks prodive robust synopsis lorem ipsum dolor', 'globetrotter' ) ?></h2>
                  <!-- /wp:heading -->
                  <!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                  <div class="wp-block-group wp-block-post-meta">
                     <!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
                     <!-- wp:post-author {"showAvatar":false} /-->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:paragraph -->
                  <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'globetrotter' ) ?></p>
                  <!-- /wp:paragraph -->
                  <!-- wp:buttons -->
                  <div class="wp-block-buttons">
                     <!-- wp:button {"className":"is-style-button"} -->
                     <div class="wp-block-button is-style-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Read More', 'globetrotter' ) ?></a></div>
                     <!-- /wp:button -->
                  </div>
                  <!-- /wp:buttons -->
               </div>
               <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
         </div>
         <!-- /wp:column -->
         <!-- wp:column -->
         <div class="wp-block-column">
            <!-- wp:group {"className":"wp-block-post-group"} -->
            <div class="wp-block-group wp-block-post-group">
               <!-- wp:image {"id":21469,"sizeSlug":"full","linkDestination":"none"} -->
               <figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/featured-content-2.jpg' ); ?>" alt="" class=""/></figure>
               <!-- /wp:image -->
               <!-- wp:group {"className":"wp-block-entry-content"} -->
               <div class="wp-block-group wp-block-entry-content">
                  <!-- wp:heading {"fontSize":"content-heading"} -->
                  <h2 class="has-content-heading-font-size"><?php esc_html_e ( 'How Investing in Self-Dependent Increase Business', 'globetrotter' ) ?></h2>
                  <!-- /wp:heading -->
                  <!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                  <div class="wp-block-group wp-block-post-meta">
                     <!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
                     <!-- wp:post-author {"showAvatar":false} /-->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:paragraph -->
                  <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'globetrotter' ) ?></p>
                  <!-- /wp:paragraph -->
                  <!-- wp:buttons -->
                  <div class="wp-block-buttons">
                     <!-- wp:button {"className":"is-style-button"} -->
                     <div class="wp-block-button is-style-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Read More', 'globetrotter' ) ?></a></div>
                     <!-- /wp:button -->
                  </div>
                  <!-- /wp:buttons -->
               </div>
               <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
         </div>
         <!-- /wp:column -->
         <!-- wp:column -->
         <div class="wp-block-column">
            <!-- wp:group {"className":"wp-block-post-group"} -->
            <div class="wp-block-group wp-block-post-group">
               <!-- wp:image {"id":21470,"sizeSlug":"full","linkDestination":"none"} -->
               <figure class="wp-block-image size-full"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/featured-content-3.jpg' ); ?>" alt="" class=""/></figure>
               <!-- /wp:image -->
               <!-- wp:group {"className":"wp-block-entry-content"} -->
               <div class="wp-block-group wp-block-entry-content">
                  <!-- wp:heading {"fontSize":"content-heading"} -->
                  <h2 class="has-content-heading-font-size"><?php esc_html_e ( '7 Productivity Tips to Avoid Burnout When Working', 'globetrotter' ) ?></h2>
                  <!-- /wp:heading -->
                  <!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                  <div class="wp-block-group wp-block-post-meta">
                     <!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
                     <!-- wp:post-author {"showAvatar":false} /-->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:paragraph -->
                  <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit integer fermentum in orci lorem ipsum.', 'globetrotter' ) ?></p>
                  <!-- /wp:paragraph -->
                  <!-- wp:buttons -->
                  <div class="wp-block-buttons">
                     <!-- wp:button {"className":"is-style-button"} -->
                     <div class="wp-block-button is-style-button"><a class="wp-block-button__link"><?php esc_html_e ( 'Read More', 'globetrotter' ) ?></a></div>
                     <!-- /wp:button -->
                  </div>
                  <!-- /wp:buttons -->
               </div>
               <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
         </div>
         <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
   </div>
   <!-- /wp:group -->
</div>
<!-- /wp:group -->

