<?php
/**
 * Title: Double Query Posts Grid
 * Slug: craftmag/double-query-posts-grid
 * Categories: query
 * Keywords: Double Query Posts Grid
 * Block Types: core/query
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"9%","left":"9%"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"40px"}}}} -->
<div class="wp-block-column" style="padding-top:40px"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"38px"}}},"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" style="margin-bottom:38px">LATEST POSTS</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":29,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"32.35%"} -->
<div class="wp-block-column" style="flex-basis:32.35%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","sizeSlug":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62.94%"} -->
<div class="wp-block-column" style="flex-basis:62.94%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}}} /-->

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
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px"}}}} -->
<div class="wp-block-column" style="padding-top:40px"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"38px"}}},"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" style="margin-bottom:38px">FEATURED POSTS</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":29,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"32.35%"} -->
<div class="wp-block-column" style="flex-basis:32.35%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","sizeSlug":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62.94%"} -->
<div class="wp-block-column" style="flex-basis:62.94%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}}} /-->

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