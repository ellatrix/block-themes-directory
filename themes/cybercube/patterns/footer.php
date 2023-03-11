<?php
/**
  * Title: Footer
  * Slug: cybercube/footer
  * Categories: footer
  */
?>
<?php

register_block_pattern(
	'cybercube/footer',
	array(
		'title'		  => __( 'Footer', 'cybercube' ),
		'blockTypes'  => array( 'core/template-part/footer' ),
		'categories'  => array( 'footer' ),
		'description' => _x( 'Footer', 'Logo, description, menu columns and copyright notice', 'cybercube' ),
		'content'     => '<!-- wp:group {"align":"full","backgroundColor":"dark-blue","textColor":"light-gray"} -->
			<div class="wp-block-group alignfull has-light-gray-color has-dark-blue-background-color has-text-color has-background">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"20px","bottom":"50px","left":"20px"}}},"layout":{"inherit":true}} -->
			<div class="wp-block-group" style="padding-top:50px;padding-bottom:50px;padding-left:20px;padding-right:20px">
				
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"33.3%","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"0px","left":"0px"}}}} -->
			<div class="wp-block-column" style="padding-top:30px;padding-right:30px;padding-bottom:0px;padding-left:0px;flex-basis:33.3%"><!-- wp:site-logo {"width":90,"style":{"color":{"duotone":["#ffffff","#ffffff"]}}} /-->
			
			<!-- wp:paragraph {"style":{"color":{"text":"#e5e7eb"}}} -->
			<p class="has-text-color" style="color:#e5e7eb">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam. </p>
			<!-- /wp:paragraph -->
			
			<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#F9FAFB","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"github"} /-->
			<!-- wp:social-link {"url":"#","service":"dribbble"} /--></ul>
			<!-- /wp:social-links -->
			<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#f9fafb"}},"fontSize":"tiny"} -->
			<p class="has-text-align-left has-text-color has-tiny-font-size" style="color:#f9fafb">Copyright © ' . date("Y") . ' Cybercube All Rights Reserved..</p>
			<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"gray","fontSize":"normal"} -->
			<h3 class="has-gray-color has-text-color has-normal-font-size"><strong>Company</strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"customTextColor":"#f9fafb","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"gray","fontSize":"normal"} -->
			<h3 class="has-gray-color has-text-color has-normal-font-size"><strong>Help and Support</strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"customTextColor":"#f9fafb","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"gray","fontSize":"normal"} -->
			<h3 class="has-gray-color has-text-color has-normal-font-size"><strong>Resources</strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"customTextColor":"#f9fafb","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"16.6%"} -->
			<div class="wp-block-column" style="flex-basis:16.6%"><!-- wp:heading {"level":3,"textColor":"gray","fontSize":"normal"} -->
			<h3 class="has-gray-color has-text-color has-normal-font-size"><strong>Legal</strong></h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"customTextColor":"#f9fafb","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			
			</div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:group -->',
	)
);
