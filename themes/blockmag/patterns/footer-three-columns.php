<?php
 /**
  * Title: Footer Three Columns
  * Slug: blockmag/footer-three-columns
  * Categories: blockmag, footer
  */
?>

<!-- wp:group {"className":"footer-dark","align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull footer-dark">
   <!-- wp:group {"align":"full","className":"wp-block-footer wp-block-widget-area","layout":{"inherit":true}} -->
   <div class="wp-block-group alignfull wp-block-footer wp-block-widget-area">
      <!-- wp:group {"align":"wide"} -->
      <div class="wp-block-group alignwide">
         <!-- wp:columns {"className":"wp-block-footer-widget-area-columns"} -->
         <div class="wp-block-columns wp-block-footer-widget-area-columns">
            <!-- wp:column {"className":"wp-block-widget"} -->
            <div class="wp-block-column wp-block-widget">
               <!-- wp:group -->
               <div class="wp-block-group">
                  <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                  <h2 id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e ( 'About', 'blockmag' ) ?></h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph -->
                  <p><?php esc_html_e ( 'Lorem ipsum dolor sit amet con sect etur adipiscing elit maecenas conse ctetur dapibus rutrum proin vitae nibh eget adipiscing elit maecenas cons.', 'blockmag' ) ?></p>
                  <!-- /wp:paragraph -->
               </div>
               <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"wp-block-widget"} -->
            <div class="wp-block-column wp-block-widget">
               <!-- wp:group -->
               <div class="wp-block-group">
                  <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                  <h2 id="contact" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e ( 'Contact', 'blockmag' ) ?></h2>
                  <!-- /wp:heading -->
                  <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
                  <div class="wp-block-group">
                     <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                     <figure class="wp-block-image size-full"><img
                        src="<?php echo get_parent_theme_file_uri( '/assets/images/icon-location.png' ); ?>" alt=""
                        class="" /></figure>
                     <!-- /wp:image -->
                     <!-- wp:paragraph -->
                     <p><a href="#"><?php esc_html_e ( '374 FA Tower, Williams S Blvd. 2721, IL, USA', 'blockmag' ) ?></a></p>
                     <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
                  <div class="wp-block-group">
                     <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                     <figure class="wp-block-image size-full"><img
                        src="<?php echo get_parent_theme_file_uri( '/assets/images/icon-phone.png' ); ?>" alt=""
                        class="" /></figure>
                     <!-- /wp:image -->
                     <!-- wp:paragraph -->
                     <p><a href="#"><?php esc_html_e ( '(+880) 123 3456 7890', 'blockmag' ) ?></a></p>
                     <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
                  <div class="wp-block-group">
                     <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                     <figure class="wp-block-image size-full"><img
                        src="<?php echo get_parent_theme_file_uri( '/assets/images/icon-envelope.png' ); ?>" alt=""
                        class="" /></figure>
                     <!-- /wp:image -->
                     <!-- wp:paragraph -->
                     <p><a href="#"><?php esc_html_e ( 'info@companyname.com', 'blockmag' ) ?></a></p>
                     <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
                  <div class="wp-block-group">
                     <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                     <figure class="wp-block-image size-full"><img
                        src="<?php echo get_parent_theme_file_uri( '/assets/images/icon-clock.png' ); ?>" alt=""
                        class="" /></figure>
                     <!-- /wp:image -->
                     <!-- wp:paragraph -->
                     <p><a href="#"><?php esc_html_e ( 'Opening Hours: 10:00 18:00', 'blockmag' ) ?></a></p>
                     <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
               </div>
               <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"wp-block-widget"} -->
            <div class="wp-block-column wp-block-widget">
               <!-- wp:group -->
               <div class="wp-block-group">
                  <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
                  <h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e ( 'Recent Post', 'blockmag' ) ?></h2>
                  <!-- /wp:heading -->
                  <!-- wp:latest-posts {"postsToShow":2,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75, "addLinkToFeaturedImage":true} /-->
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
</div>
<!-- /wp:group -->

