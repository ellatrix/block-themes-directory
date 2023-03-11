<?php
/**
 *
 * @package Blockpress
 */

return array(
	'title'         => __( 'Related posts', 'blockpress' ),
	'categories'    => array( 'blockpress-parts' ),
 
	'content'       => '
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:50px">

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column">
    <!-- wp:post-navigation-link {"type":"previous","label":"«","showTitle":true,"className":"is-style-hovershadow"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"20px","frhideOnMobile":true} -->
<div class="wp-block-column fr-mobile-hide" style="flex-basis:20px"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
    <!-- wp:post-navigation-link {"label":"»","showTitle":true,"textAlign":"right", "className":"is-style-hovershadow"} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
',
);
