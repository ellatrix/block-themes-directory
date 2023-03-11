<?php
/**
 * Title: Query grid with three columns.
 * Slug: design-mode/mini-query
 * Categories: design-mode-general
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"80px"},"blockGap":"40px"}}} -->
<div class="wp-block-group alignwide" style="padding-bottom:80px"><!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h3 class="has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Design Journal', 'design-mode' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}}},"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default" style="margin-top:0px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- wp:query {"queryId":3,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":400,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"textColor":"base","fontSize":"x-small"} /-->
<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"base","fontSize":"large"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
