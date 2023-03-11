<?php
/**
 * Blockpress: Header with site title, navigation, dark background
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Simple dark header', 'blockpress' ),
	'categories'    => array( 'blockpress-header' ),
	'blockTypes'    => array( 'core/template-part/header' ),
 
	'content'       => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"25px","bottom":"25px"}}},"backgroundColor":"dark","layout":{"inherit":true}} -->
			<div class="wp-block-group alignfull has-dark-background-color has-background" style="padding-top:25px;padding-bottom:25px">
				<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide">
					<!-- wp:site-title {"level":0, "style":{"elements":{"link":{"color":{"text":"var:preset|color|textondark"}}}}} /-->
					<!-- wp:navigation {"textColor":"textondark","isResponsive":true} /-->
					</div>
				<!-- /wp:group -->
			</div>
	<!-- /wp:group -->',
);
