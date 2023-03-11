<?php
/**
 * Title: Query Style 1
 * Slug: craftmag/query-style-1
 * Categories: query
 * Keywords: Posts Style 1
 * Block Types: core/query
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-bottom:50px"><!-- wp:heading {"textAlign":"left","level":4,"align":"wide","style":{"spacing":{"margin":{"bottom":"38px"}},"typography":{"fontSize":"32px"}}} -->
<h4 class="alignwide has-text-align-left" style="margin-bottom:38px;font-size:32px">LATEST POSTS</h4>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"5%","left":"5%"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":36,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"30px"},"spacing":{"margin":{"bottom":"0px","top":"20px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:14px"><!-- wp:post-author {"avatarSize":24,"showAvatar":false} /-->

<!-- wp:post-date {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":29,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"32.35%"} -->
<div class="wp-block-column" style="flex-basis:32.35%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","sizeSlug":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62.94%"} -->
<div class="wp-block-column" style="flex-basis:62.94%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"19px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:14px"><!-- wp:post-author {"avatarSize":24,"showAvatar":false} /-->

<!-- wp:post-date {"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->