<?php

return array(
	'title'         => __( 'Simple dark footer', 'blockpress' ),
	'categories'    => array( 'blockpress-footer' ),
	'blockTypes'    => array( 'core/template-part/footer' ),
 
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}},"elements":{"link":{"color":{"text":"var:preset|color|textondark"}}}},"backgroundColor":"dark","textColor":"textondark","layout":{"inherit":true},"fontSize":"small"} -->
				<div class="wp-block-group alignfull has-textondark-color has-dark-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
				<div class="wp-block-group alignwide"><!-- wp:paragraph -->
				<p>© ' . gmdate( 'Y' ) . ' Your Company LLC · <a href="#">' . esc_html__( 'Contact Us', 'blockpress' ) . '</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="#">Facebook</a> · <a href="#">Twitter</a> · <a href="#">Instagram</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group -->',
);
