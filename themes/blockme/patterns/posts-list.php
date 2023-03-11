<?php
/**
 * Title: Posts list
 * Slug: blockme/posts-list
 * Categories: featured, query, blockme
 * Block Types: core/query, core/post-template, core/post-featured-image, core/post-title, core/post-author, core/post-date, core/post-terms, core/post-excerpt, core/read-more, core/query-pagination, core/query-pagination-previous, core/query-pagination-numbers, core/query-pagination-next, core/group, core/columns, core/column, core/spacer
 * Inserter: yes
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"25px","right":"15px","bottom":"25px","left":"15px"}}},"backgroundColor":"blockme-lightergray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-blockme-lightergray-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:25px;padding-right:15px;padding-bottom:25px;padding-left:15px"><!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"color":"#dddddd","width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"background":"#eeeeee"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:#dddddd;border-width:1px;background-color:#eeeeee;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"blockme-white","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-blockme-white-border-color" style="border-width:1px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"height":"200px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"15px","left":"0px"}}},"fontSize":"blockme-medium"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"10px"},"blockGap":"24px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:10px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category","prefix":"Categories: "} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:read-more {"content":"Continue Reading","style":{"spacing":{"padding":{"top":"5px","right":"10px","bottom":"5px","left":"10px"}}},"backgroundColor":"blockme-darkgray","textColor":"blockme-white"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"25px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous Page","fontSize":"blockme-x-small"} /-->

<!-- wp:query-pagination-numbers {"fontSize":"blockme-x-small"} /-->

<!-- wp:query-pagination-next {"label":"Next Page","fontSize":"blockme-x-small"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->