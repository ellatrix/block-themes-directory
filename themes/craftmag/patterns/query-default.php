<?php
/**
 * Title: Query Default
 * Slug: craftmag/query-default
 * Categories: query
 * Keywords: Default Query Loop
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","displayLayout":{"type":"flex","columns":2},"className":"craftmag-home-query","layout":{"inherit":true}} -->
<main class="wp-block-query craftmag-home-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"19px","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","sizeSlug":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|craftmag-primary"}}}},"fontSize":"small","fontFamily":"fira-sans-condensed"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"24px","textDecoration":"none","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:group {"style":{"typography":{"fontSize":"14px"},"spacing":{"blockGap":"14px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="font-size:14px"><!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":""} /-->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"textDecoration":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"fontSize":"normal"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"55px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:55px"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"center"},"fontSize":"medium"} -->
<!-- wp:query-pagination-previous {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:query-pagination-numbers {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:query-pagination-next {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->