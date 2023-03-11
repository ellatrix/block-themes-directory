<?php

/**
 * Blockpress: Header with site title, navigation
 *
 * @package Blockpress
 */

return array(
	'title'         => __('Simple header', 'blockpress'),
	'categories'    => array('blockpress-header'),
	'blockTypes'    => array('core/template-part/header'),
 
	'content'       => '
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"25px","bottom":"25px"}}},"layout":{"inherit":true}} -->
		<div class="wp-block-group alignfull" style="padding-top:25px;padding-bottom:25px">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:site-title {"level":0} /-->
				<!-- wp:navigation {"isResponsive":true} /-->
			</div>
		<!-- /wp:group -->
		</div>
	<!-- /wp:group -->',
);
