<?php
/**
 * CTA
 */
return array(
	'title'      => esc_html__( 'CTA', 'catch-fse' ),
	'categories' => array( 'catch-fse', 'featured' ),
	// 'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:cover {"url":"' . get_parent_theme_file_uri( '/assets/images/promotional-video.jpg' ) . '","dimRatio":20,"align":"full","className":"wp-block-section"} -->
<div class="wp-block-cover alignfull wp-block-section"><span aria-hidden="true" class="has-background-dim-20 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . get_parent_theme_file_uri( '/assets/images/promotional-video.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
    <!-- wp:group -->
<div class="wp-block-group">

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h2 class="has-text-align-center" style="font-style:normal;font-weight:400">' . esc_html__( 'Amazing Videos & Presentations', 'catch-fse' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">' . esc_html__( 'We Create, We Develop, We Inspire.', 'catch-fse' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Find Out', 'catch-fse' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
</div><!-- /wp:group --></div></div>
<!-- /wp:cover -->',
);
