<?php
/**
 * Post Header with img bg
 */
return array(
	'title'      => esc_html__( 'Post Header with img bg', 'photobrust' ),
	'categories' => array( 'photobrust', 'header' ),
	'content'    => '<!-- wp:group {"align":"full", "layout":{"inherit":true}, "className":"no-margin-top"} -->
<div class="wp-block-group alignfull no-margin-top"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '","id":1853,"dimRatio":20,"focalPoint":{"x":"1.00","y":"1.00"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1853" alt="" src="' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '" style="object-position:100% 100%" data-object-fit="cover" data-object-position="100% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide} -->
        <div class="wp-block-group alignwide"><!-- wp:post-title {"level":1,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var(--wp--custom--spacing--wp-comment-vertical)"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
