<?php
/**
 * Title:          Vanilla Posts
 * Categories:     query
 * Slug:           siuy/query-vanilla
 * Inserter:       yes
 * Keywords:       query, posts
 * Block Types:    core/query
 * 
 * @since          2.1.0
 * @package        siuy
 * @subpackage     siuy/patterns
 */

?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--20)"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Read more', 'siuy' ); ?>","style":{"typography":{"fontSize":"16px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
