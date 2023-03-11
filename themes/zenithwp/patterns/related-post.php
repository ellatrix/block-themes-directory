<?php

/**
 * Title: Related Post
 * Slug: zenithwp/related-post
 * Categories: zenithwp
 * Keywords: Related Post
 * Block Types: core/buttons
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"margin":{"bottom":"96px"}}},"className":"zenithwp-related-posts","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group zenithwp-related-posts" style="margin-bottom:96px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"48px"}},"color":{"text":"#160d28"}},"fontSize":"large"} -->
    <h3 class="has-text-color has-large-font-size" style="color:#160d28;margin-bottom:48px"><?php esc_html_e('Related Posts', 'zenithwp'); ?></h3>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":33,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
        <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"281px","dimRatio":20,"style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->

        <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"#160d28"}}},"color":{"text":"#160d28"},"typography":{"fontSize":"16px","textDecoration":"none","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"8px","top":"0px","right":"0px","left":"0px"}}}} /-->

        <!-- wp:post-date {"style":{"color":{"text":"#999999"},"elements":{"link":{"color":{"text":"#999999"}}},"typography":{"fontSize":"12px"},"spacing":{"margin":{"top":"0px","right":"0px","left":"0px","bottom":"8px"}}}} /-->

        <!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"0px","bottom":"8px","right":"0px","left":"0px"}}},"textColor":"base"} /-->

        <!-- wp:read-more {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->