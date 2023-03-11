<?php
/**
 * Header Default Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Header Default', 'allele' ),
			'categories'    => array( 'allele-headers' ),
			'blockTypes'    => array( 'core/template-part/header' ),
			'content'       => '<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2vw","bottom":"2vw"}},"border":{"style":"solid","width":"1px"}},"borderColor":"border","className":"is-style-allele-no-spacing border-end-0 border-top-0 border-start-0","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing border-end-0 border-top-0 border-start-0 has-border-color has-border-border-color" style="border-style:solid;border-width:1px;padding-top:2vw;padding-bottom:2vw"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"foreground","overlayBackgroundColor":"background-secondary","overlayTextColor":"foreground","className":"is-style-allele-navigation-alpha","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
