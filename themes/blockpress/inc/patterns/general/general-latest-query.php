<?php
/**
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Latest 3 posts with heading', 'blockpress' ),
	'categories'    => array( 'blockpress-general' ),
 
	'content'       => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:60px;padding-bottom:60px"><!-- wp:group {"style":{"spacing":{}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","className":"fr-animate fr-move-up","fontSize":"small"} -->
<p class="has-text-align-center fr-animate fr-move-up has-primary-color has-text-color has-small-font-size" style="text-transform:uppercase">want to learn more</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"className":"fr-animate fr-flip fr-delay-3","fontSize":"max-huge"} -->
<p class="has-text-align-center fr-animate fr-flip fr-delay-3 has-max-huge-font-size" style="font-style:normal;font-weight:700;line-height:1.2">Check our latest articles</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":55,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"is-style-default fr-animate fr-move-up fr-delay-5"} -->
<div class="wp-block-query alignwide is-style-default fr-animate fr-move-up fr-delay-5"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"230px","className":"fr-hover-scale-img"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"  ","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-blockpress-tags-nounder","fontSize":"xsmall"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"big"} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"1.1rem"},"spacing":{"margin":{"top":"5px"}}},"textColor":"lightgrey","className":"is-style-text-clamp-two"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xsmall"} /-->

<!-- wp:paragraph {"fontSize":"xsmall"} -->
<p class="has-xsmall-font-size">/</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"textColor":"lightgrey","fontSize":"xsmall"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":26} -->
<div style="height:26px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
',
);
