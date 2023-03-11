<?php
/**
 * Archive Header
 */
return array(
	'title'      => esc_html__( 'Archive Header', 'pentatonic' ),
	'categories' => array( 'pentatonic', 'header' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}, "className":"no-margin-top"} -->
<div class="wp-block-group alignfull no-margin-top"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '","dimRatio":20,"overlayColor":"body-text"} -->
<div class="wp-block-cover"><span aria-hidden="true" class="has-body-text-background-color has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . get_parent_theme_file_uri( '/assets/images/header-background.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide} -->
        <div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

<!-- wp:term-description {"textAlign":"center"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
