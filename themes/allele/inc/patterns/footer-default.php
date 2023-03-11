<?php
/**
 * Footer Default Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'Footer Default', 'allele' ),
			'categories'    => array( 'allele-footers' ),
			'blockTypes'    => array( 'core/template-part/footer' ),
			'content'       => '<!-- wp:group {"align":"full","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8vw","bottom":"8vw"}},"border":{"width":"1px","style":"solid"}},"borderColor":"border","textColor":"text-quaternary","className":"is-style-allele-no-spacing border-end-0 border-bottom-0 border-start-0","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing border-end-0 border-bottom-0 border-start-0 has-border-color has-border-border-color has-text-quaternary-color has-text-color" style="border-style:solid;border-width:1px;padding-top:8vw;padding-bottom:8vw"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"textColor":"foreground","overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"flexWrap":"nowrap"}} /-->

<!-- wp:social-links {"className":"is-style-logos-only color-foreground","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links is-style-logos-only color-foreground"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"border","className":"alignwide is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background alignwide is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"tiny"} -->
<p class="has-text-secondary-color has-text-color has-link-color has-tiny-font-size">' . allele_site_info() . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"tiny"} -->
<p class="has-text-align-right has-text-secondary-color has-text-color has-link-color has-tiny-font-size">' . allele_theme_info() . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
