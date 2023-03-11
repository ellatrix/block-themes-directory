<?php
 /**
  * Title: Recent Blog With Sidebar
  * Slug: blockmag/recent-blog-with-sidebar
  * Categories: blockmag, page
  */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
   <!-- wp:columns {"align":"wide","className":"wp-block-sidebar-on-right"} -->
   <div class="wp-block-columns alignwide wp-block-sidebar-on-right">
      <!-- wp:column {"width":"75%"} -->
      <div class="wp-block-column" style="flex-basis:75%">
         <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":true}} -->
         <div class="wp-block-query">
            <!-- wp:post-template {"align":"full"} -->
            <!-- wp:group {"layout":{"inherit":true}} -->
            <div class="wp-block-group">
               <!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->
               <!-- wp:group {"align":"full","className":"alignfull wp-block-post-container"} -->
               <div class="wp-block-group alignfull wp-block-post-container">
                  <!-- wp:post-title {"isLink":true} /-->
                  <!-- wp:group {"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
                  <div class="wp-block-group wp-block-post-meta">
                     <!-- wp:post-terms {"term":"category"} /-->
                     <!-- wp:post-date {"isLink":true} /-->
                     <!-- wp:post-author {"showAvatar":false} /-->
                     <!-- wp:post-terms {"term":"post_tag"} /-->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:post-excerpt {"moreText":"Continue Reading"} /-->
               </div>
               <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
            <!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous {"fontSize":"small"} /-->
            <!-- wp:query-pagination-numbers /-->
            <!-- wp:query-pagination-next {"fontSize":"small"} /-->
            <!-- /wp:query-pagination -->
         </div>
         <!-- /wp:query -->
      </div>
      <!-- /wp:column -->
      <!-- wp:column {"width":"25%","className":"wp-block-column-sidebar"} -->
      <div class="wp-block-column wp-block-column-sidebar" style="flex-basis:25%">
         <!-- wp:template-part {"slug":"sidebar","tagName":"div","theme":"blockmag"} /-->
      </div>
      <!-- /wp:column -->
   </div>
   <!-- /wp:columns -->
</div>
<!-- /wp:group -->
