<?php
/**
 * Hidden Query Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'    => __( 'Hidden Query', 'allele' ),
      'inserter' => false,
      'categories'    => array( 'allele-query' ),
			'content'  => '<!-- wp:query {"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"list"},"align":"wide","className":"is-allele-no-spacing","layout":{"inherit":false}} -->
<div class="wp-block-query alignwide is-allele-no-spacing"><!-- wp:post-template {"className":"is-style-allele-query-loop-alternate is-allele-no-spacing py-2 py-md-4 py-xl-6"} -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"is-featured-image-column"} -->
<div class="wp-block-column is-vertically-aligned-center is-featured-image-column"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"is-allele-hover-shine"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"right":"2vw","left":"2vw"},"blockGap":"10px"}}} -->
<div class="wp-block-group" style="padding-right:2vw;padding-left:2vw"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tl-heading"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"large"} /-->

<!-- wp:post-date {"textColor":"text-secondary","fontSize":"small"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","className":"is-style-allele-box-pagination-alpha is-allele-no-spacing pb-6 pb-xl-8","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->',
);
