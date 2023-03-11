<?php
/**
  * Title: Header
  * Slug: cybercube/header
  * Categories: header
  */
?>
<?php

register_block_pattern(
	'cybercube/header',
	array(
		'title'		  => __( 'Header', 'cybercube' ),
		'blockTypes'  => array( 'core/template-part/header' ),
		'categories'  => array( 'header' ),
		'description' => _x( 'Header', 'Logo and menu', 'cybercube' ),
		'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","bottom":"15px","left":"20px"}},"color":{"background":"#ffe0d3"}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="background-color:#ffe0d3;padding-right:20px;padding-bottom:15px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":130,"align":"left"} /-->

<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:button {"width":100,"style":{"border":{"radius":"9px"}},"className":"has-custom-font-size is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline"><a class="wp-block-button__link" style="border-radius:9px">Get It Now </a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
	)
);
