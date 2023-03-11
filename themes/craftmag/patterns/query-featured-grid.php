<?php
/**
 * Title: Featured Posts Grid
 * Slug: craftmag/featured-posts-grid
 * Categories: query
 * Keywords: Featured Posts Grid
 * Block Types: core/query
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"55px","bottom":"55px"},"margin":{"top":"0px"}},"color":{"background":"#e7eaf1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#e7eaf1;margin-top:0px;padding-top:55px;padding-bottom:55px"><!-- wp:query {"queryId":19,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"craftmag-fp1-query"} -->
<div class="wp-block-query alignwide craftmag-fp1-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.51},"minHeight":500,"contentPosition":"bottom left","isDark":false,"className":"craftmag-featured-post-cover","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left craftmag-featured-post-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"25px","right":"30px","bottom":"25px","left":"30px"}},"color":{"gradient":"linear-gradient(135deg,rgba(0,0,0,0.19) 0%,rgba(0,0,0,0.19) 100%)"}},"layout":{"type":"constrained","contentSize":"px","justifyContent":"left"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(135deg,rgba(0,0,0,0.19) 0%,rgba(0,0,0,0.19) 100%);padding-top:25px;padding-right:30px;padding-bottom:25px;padding-left:30px"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"26px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} /-->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->