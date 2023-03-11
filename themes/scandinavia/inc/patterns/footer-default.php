<?php
/**
 * Default footer block pattern
 */
return array(
	'title'      => __( 'Default Footer', 'scandinavia' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"backgroundColor":"secondary"} -->
                    <div id="footer-default" class="wp-block-group has-secondary-background-color has-background"><!-- wp:group {"layout":{"contentSize":"960px"}} -->
                    <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"60px","bottom":"20px"}}}} -->
                    <div class="wp-block-columns" style="padding-top:60px;padding-bottom:20px"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"tertiary","fontSize":"medium"} -->
                    <p class="has-tertiary-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:700">' . esc_html__( 'Follow Us', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:paragraph {"textColor":"tertiary","fontSize":"small"} -->
                    <p class="has-tertiary-color has-text-color has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"secondary","style":{"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"}},"border":{"radius":"50px"}},"className":"is-style-fill","fontSize":"tiny"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill has-tiny-font-size"><a class="wp-block-button__link has-secondary-color has-tertiary-background-color has-text-color has-background" style="border-radius:50px;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem">' . esc_html__( 'Subscribe', 'scandinavia' ) . '</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":"10%","textColor":"background"} -->
                    <div class="wp-block-column has-background-color has-text-color" style="flex-basis:10%"><!-- wp:spacer {"height":"10px"} -->
                    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":"15%"} -->
                    <div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"tertiary","fontSize":"medium"} -->
                    <p class="has-tertiary-color has-text-color has-medium-font-size md-text-center" style="font-style:normal;font-weight:700">' . esc_html__( 'Connect', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:navigation {"textColor":"tertiary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} /--></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"width":"15%"} -->
                    <div class="wp-block-column" style="flex-basis:15%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"tertiary","fontSize":"medium"} -->
                    <p class="has-tertiary-color has-text-color has-medium-font-size md-text-center" style="font-style:normal;font-weight:700">' . esc_html__( 'Resources', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:navigation {"textColor":"tertiary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} /--></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
                    
                    <!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide"} -->
                    <hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
                    <!-- /wp:separator --></div>
                    <!-- /wp:group -->
                    
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"40px"}}},"layout":{"contentSize":"960px"}} -->
                    <div id="footer-bottom-section" class="wp-block-group" style="padding-top:20px;padding-bottom:40px"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group md-align-center"><!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"fontSize":"large"} /-->
                    
                    <!-- wp:site-tagline {"textColor":"tertiary"} /--></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                    <!-- wp:navigation {"textColor":"tertiary","openSubmenusOnClick":true,"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"typography":{"lineHeight":"1"}},"fontSize":"tiny"} /--></div>
                    <!-- /wp:column -->
                    
                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","textColor":"tertiary","fontSize":"tiny"} -->
                    <p class="has-text-align-right has-tertiary-color has-text-color has-tiny-font-size md-text-center">' . esc_html__( '© Scandinavia. All Rights Reserved.', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:group -->',
);
