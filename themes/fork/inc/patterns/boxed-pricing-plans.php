<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package fork
 * @since 1.0.0
 *
 * slug: boxed-pricing-plans
 * title: Boxed pricing plans
 * categories:Fork
 * keywords: pricing, plans
 */

return array(
	'title'      => __( 'Boxed pricing plans', 'fork' ),
	'categories' => array( 'fork' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">' . __( 'Pricing Plans', 'fork' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-column is-vertically-aligned-center has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">' . __( 'Starter', 'fork' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size">$69</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline">
<a class="wp-block-button__link wp-element-button">' . __( 'Buy Plan', 'fork' ) . '</a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'One website', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'Premium Support', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( '20 actions', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'Limited access to library', 'fork' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"64px","right":"32px","bottom":"64px","left":"32px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-column has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="padding-top:64px;padding-right:32px;padding-bottom:64px;padding-left:32px">
<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Pro</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size">$89</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button">Buy Plan</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'One website', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'Premium Support', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( '20 actions', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'Limited access to library', 'fork' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-column is-vertically-aligned-center has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">' . __( 'Expert', 'fork' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size">$199</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline">
<a class="wp-block-button__link wp-element-button">' . __( 'Buy Plan', 'fork' ) . '</a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'One website', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'Premium Support', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( '20 actions', 'fork' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'Limited access to library', 'fork' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-ti-bg-alt-background-color has-background">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'All plans come with a 14-day money-back guarantee', 'fork' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->        
',
);
