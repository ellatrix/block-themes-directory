<?php
/**
 * Featured Post Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Featured Post', 'allele' ),
			'categories'    => array( 'allele-query' ),
			'content'       => '<!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"},"align":"full","className":"is-allele-no-spacing","layout":{"inherit":false}} -->
<div class="wp-block-query alignfull is-allele-no-spacing"><!-- wp:post-template -->
<!-- wp:columns {"className":"gap-0 mb-0"} -->
<div class="wp-block-columns gap-0 mb-0"><!-- wp:column {"backgroundColor":"background-secondary","className":"d-md-flex align-items-md-center"} -->
<div class="wp-block-column d-md-flex align-items-md-center has-background-secondary-background-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"background-secondary"} -->
<div class="wp-block-column has-background-secondary-background-color has-background"><!-- wp:post-featured-image {"width":"100%","height":"100%","className":"h-100"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->',
);
