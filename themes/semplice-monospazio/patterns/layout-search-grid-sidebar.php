<?php
/**
 * Title: Search - Grid Content-Sidebar Layout.
 * Slug: semplice-monospazio/layout-search-grid-sidebar
 * Categories: semplice-monospazio-layouts
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide","className":"content-sidebar-layout"} -->
<div class="wp-block-columns alignwide content-sidebar-layout"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%">
<!-- wp:pattern {"slug":"semplice-monospazio/default-search"} /-->

<!-- wp:separator {"align":"center","className":"is-style-wide"} -->
<hr class="wp-block-separator aligncenter has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
<!-- wp:group {"className":"blog-query-grid default-backgrounds"} -->
<div class="wp-block-group blog-query-grid default-backgrounds"><!-- wp:query {"queryId":5,"query":{"perPage":"12","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"grid-blog-post"} -->
<div class="wp-block-group grid-blog-post"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"10px"}},"className":"post-info-lower"} -->
<div class="wp-block-group post-info-lower" style="padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-title {"fontSize":"large"} /-->

<!-- wp:post-terms {"term":"category","textAlign":"center"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"Read This Post","style":{"spacing":{"padding":{"top":"10px","right":"25px","bottom":"10px","left":"25px"}}},"backgroundColor":"black","textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"semplice-monospazio-dev","className":"site-sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
