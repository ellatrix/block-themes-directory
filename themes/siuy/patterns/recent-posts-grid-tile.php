<?php
/**
 * Title:          Recent Posts Grid Tile
 * Categories:     recent-posts
 * Slug:           siuy/recent-posts-grid-tile
 * Inserter:       yes
 * Keywords:       recent posts, latest posts
 * Block Types:    core/latest-posts
 * 
 * @since          2.1.0
 * @package        siuy
 * @subpackage     siuy/patterns
 */

?>
<!-- wp:group {"className":"alignfull", "align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--70)","bottom":"var(--wp--preset--spacing--50)"}}},"backgroundColor":"tile","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-tile-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:latest-posts {"postsToShow":4,"displayPostContent":true,"excerptLength":20,"displayPostDate":true,"postLayout":"grid","columns":4,"displayFeaturedImage":true,"featuredImageSizeSlug":"large","addLinkToFeaturedImage":true} /--></div>
<!-- /wp:group -->
