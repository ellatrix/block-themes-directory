<?php
return array(
			'title'         => __( 'Header Informational (wide)', 'sampler' ),
			'categories'    => array( 'sampler-headers', 'featured' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'viewportWidth' => 1200,
			'content'       => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1em","right":"2rem","bottom":"0em","left":"2rem"}}},"backgroundColor":"black","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-black-background-color has-background" style="padding-top:1em;padding-right:2rem;padding-bottom:0em;padding-left:2rem"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-logo {"width":120} /--></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"is-style-links-plain"} /-->

<!-- wp:site-tagline {"textColor":"white","className":"is-style-zero-top-margin"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"right":"10px","left":"10px"}}},"borderColor":"very-dark-gray"} -->
<div class="wp-block-group has-border-color has-very-dark-gray-border-color" style="border-style:solid;border-width:1px;padding-right:10px;padding-left:10px"><!-- wp:paragraph {"textColor":"white","fontSize":"normal"} -->
<p class="has-white-color has-text-color has-normal-font-size">t</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"white","className":"is-style-arrow","fontSize":"normal"} -->
<p class="is-style-arrow has-white-color has-text-color has-normal-font-size">212-555-1234</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px","style":"solid"},"spacing":{"padding":{"right":"8px","left":"8px"}}},"borderColor":"very-dark-gray"} -->
<div class="wp-block-group has-border-color has-very-dark-gray-border-color" style="border-style:solid;border-width:1px;padding-right:8px;padding-left:8px"><!-- wp:paragraph {"textColor":"white","fontSize":"normal"} -->
<p class="has-white-color has-text-color has-normal-font-size">e</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"white","className":"is-style-arrow","fontSize":"normal"} -->
<p class="is-style-arrow has-white-color has-text-color has-normal-font-size">contact@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"align":"wide","backgroundColor":"vivid-pink","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-vivid-pink-color has-alpha-channel-opacity has-vivid-pink-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","className":"is-style-zero-top-margin","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide is-style-zero-top-margin">

			<!-- wp:navigation {"textColor":"white","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"style":{"spacing":{"blockGap":"2.5em"}}} -->

				<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"Gallery","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

				<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- /wp:navigation -->


<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-pink","textColor":"white","style":{"border":{"radius":"0px"}},"fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-white-color has-vivid-pink-background-color has-text-color has-background" style="border-radius:0px">Contact</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
',
);
