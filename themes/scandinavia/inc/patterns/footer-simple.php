<?php
/**
 * Simple footer block pattern
 */
return array(
	'title'      => __( 'Simple Footer', 'scandinavia' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"60px"},"padding":{"top":"1em","right":"1em","bottom":"1em","left":"1em"}}}} -->
                    <div class="wp-block-group" style="margin-top:60px;padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em"><!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center">' . esc_html__( '© Scandinavia. All Rights Reserved.', 'scandinavia' ) . '</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:group -->',
);
