<?php
/**
 * Title: Sidebar Default
 * Slug: craftmag/sidebar-default
 * Keywords: Default Sidebar
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:40px"><!-- wp:image {"align":"center","id":2356,"width":300,"height":250,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/ad.png'; ?>" alt="" class="wp-image-2356" width="300" height="250"/></a><figcaption class="wp-element-caption">Advertisement</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"35px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:35px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"20px","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"}}} -->
<h4 style="margin-top:0px;margin-bottom:20px;font-size:21px;font-style:normal;font-weight:600">RECENT ARTICLES</h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":29,"query":{"perPage":"5","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[]}}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"margin":{"top":"14px","bottom":"14px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:14px;margin-bottom:14px"><!-- wp:column {"width":"32.35%"} -->
<div class="wp-block-column" style="flex-basis:32.35%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","sizeSlug":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62.94%"} -->
<div class="wp-block-column" style="flex-basis:62.94%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"17px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:14px"><!-- wp:post-date {"isLink":true} /--></div>
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
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"backgroundColor":"craftmag-primary","fontFamily":"nunito"} /-->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"20px"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"}}} -->
<h4 style="margin-bottom:20px;font-size:21px;font-style:normal;font-weight:600">CATEGORIES</h4>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"style":{"typography":{"lineHeight":"1.8"}},"fontSize":"normal"} /-->