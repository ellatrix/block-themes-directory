
<?php
 /**
  * Title: Blog Posts 3 Columns
  * Slug: visualsite/blog-posts-3-columns
  * Categories: visualsite
  */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]},"parents":[]},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"bottom":"10px","top":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-bottom:10px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php esc_html_e('From Our Blog Posts', 'visualsite'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#666666"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-text-color has-medium-font-size" style="color:#666666"><?php esc_html_e('This is your awesome sub title', 'visualsite'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-template {"fontSize":"small"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase","fontSize":"12rem"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="font-size:12rem;letter-spacing:2px;text-transform:uppercase"><!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#666666"}}},"typography":{"fontSize":"12px","letterSpacing":"1px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1.4rem"}}} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:40px"><!-- wp:button {"textColor":"base","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#"><?php esc_html_e('View All Blog Posts', 'visualsite'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->