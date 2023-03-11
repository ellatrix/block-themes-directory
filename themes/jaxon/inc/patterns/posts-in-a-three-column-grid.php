<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: posts-in-a-three-column-grid
 * title: Posts in a three column grid
 * categories: Jaxon
 * keywords: columns, grid, posts, query-loop
 */

return array(
	'title'      => __( 'Posts in a three column grid', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:heading {"align":"wide"} -->
<h2 class="alignwide">' . __( 'Latest Posts', 'jaxon' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":6,"query":{"perPage":3,"pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:post-featured-image {"style":{"border":{"radius":"8px"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","backgroundColor":"ti-bg-alt"} -->
<p class="has-ti-bg-alt-background-color has-background">' . __( 'No Posts were found', 'jaxon' ) . '</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
',
);

