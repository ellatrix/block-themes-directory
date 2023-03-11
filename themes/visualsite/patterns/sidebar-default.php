<?php
 /**
  * Title: Sidebar Default
  * Slug: visualsite/sidebar-default
  * Categories: visualsite
  */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"","buttonText":"Search"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"background","className":"has-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-box-shadow has-background-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3} -->
<h3><?php esc_html_e('Recent Posts', 'visualsite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":80,"featuredImageSizeHeight":80,"addLinkToFeaturedImage":true,"style":{"typography":{"lineHeight":"1.3","fontSize":"1rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"background","className":"has-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-box-shadow has-background-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3} -->
<h3><?php esc_html_e('Categories', 'visualsite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"background","className":"has-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-box-shadow has-background-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":3} -->
<h3><?php esc_html_e('Tag Cloud', 'visualsite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"numberOfTags":30,"smallestFontSize":"12px","largestFontSize":"12px","className":"is-style-outline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
