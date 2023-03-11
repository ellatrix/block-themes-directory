<?php
/**
  * Title: Header without button
  * Slug: cybercube/header-without-button
  * Categories: header
  */
?>
<?php

register_block_pattern(
	'cybercube/header-without-button',
	array(
		'title'		  => __( 'Header Without Button', 'cybercube' ),
		'blockTypes'  => array( 'core/template-part/header-without-button' ),
		'categories'  => array( 'header' ),
		'description' => _x( 'Header', 'Logo and menu', 'cybercube' ),
		'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","bottom":"15px","left":"20px"}},"color":{"background":"#ffe0d3"}},"layout":{"inherit":true}} -->
<div class="wp-block-group has-background" style="background-color:#ffe0d3;padding-right:20px;padding-bottom:15px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":130,"align":"left"} /-->

<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
	)
);
