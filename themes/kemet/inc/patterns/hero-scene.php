<?php
/**
 * Kemet General Pattern
 * Hero Scene
 **/
return array(
	'title'      => __( 'Hero Scene', 'kemet' ),
    'categories' => array( 'kemet-patterns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"110px","bottom":"110px"}}},"backgroundColor":"tertiary","className":"is-style-default"} -->
    <div class="wp-block-group alignfull is-style-default has-tertiary-background-color has-background" style="padding-top:110px;padding-bottom:110px"><!-- wp:group {"align":"full","className":"is-style-default","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull is-style-default"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;flex-basis:55%"><!-- wp:group {"layout":{"inherit":false,"contentSize":"","wideSize":""}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary","className":"is-style-kmt-bottom-border"} -->
    <h6 class="is-style-kmt-bottom-border has-primary-color has-text-color" style="text-transform:uppercase"><strong>' . esc_html__( '+200 types of flowers', 'kemet') . '</strong></h6>
    <!-- /wp:heading -->
    
    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.1}},"textColor":"background"} -->
    <h2 class="has-background-color has-text-color" style="font-style:normal;font-weight:700;line-height:1.1">' . esc_html__( 'Provide You With the Most Beautiful Flowers', 'kemet') . '</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textColor":"secondary"} -->
    <p class="has-secondary-color has-text-color">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum felis sed ullamcorper tempus faucibus in imperdiet. Semper justo mauris sed fusce erat aenean tristique.', 'kemet') . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"10px"} -->
    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"13px","bottom":"13px","left":"31px","right":"31px"}}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link" style="padding-top:13px;padding-right:31px;padding-bottom:13px;padding-left:31px"><strong>' . esc_html__( 'Order Now', 'kemet') . '</strong> <strong>➜</strong></a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color"><strong><strong>' . esc_html__( 'Our Location', 'kemet') . '</strong> ★</strong></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"layout":{"inherit":false,"contentSize":""}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;flex-basis:45%"><!-- wp:image {"id":640,"width":500,"height":500,"sizeSlug":"large","linkDestination":"none","className":"is-style-image-mask-sketch"} -->
    <figure class="wp-block-image size-large is-resized is-style-image-mask-sketch"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/art-bg.jpg" alt="" class="wp-image-640" width="500" height="500"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);