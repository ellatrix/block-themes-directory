<?php
/**
  * Title: Home Pricing
  * Slug: cybercube/home-pricing
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-pricing',
	array(
	'title'         => __( 'Home Pricing', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"color":{"background":"#f9f9f9"},"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"className":"pricing","layout":{"inherit":true}} -->
<div class="wp-block-group pricing has-background" style="background-color:#f9f9f9;padding-top:50px;padding-bottom:50px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#fb7d58"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px;font-style:normal;font-weight:600;text-transform:uppercase">PRICING</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:700;margin-bottom:20px;text-transform:capitalize">Great Pricing Plan</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"contentSize":"1100px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px"}}}} -->
<div class="wp-block-columns" style="padding-top:50px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"pricingTable"} -->
<div class="wp-block-column pricingTable" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="price-value">
                    <span class="amount">$0</span>
                    <span class="duration">per month</span>
                </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"30px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:30px;font-style:normal;font-weight:800;margin-bottom:20px;text-transform:uppercase">BASIC</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"pricing-content"} -->
<ul class="pricing-content"><li>50GB Disk Space</li><li>50 Email Accounts</li><li>50GB Bandwidth</li><li>Maintenance</li><li>15 Subdomains</li></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"border":{"radius":"9px"},"color":{"background":"#fb7d58"}},"fontSize":"normal"} -->
<div class="wp-block-button aligncenter has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-background" style="border-radius:9px;background-color:#fb7d58">Purchase Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"pricingTable"} -->
<div class="wp-block-column pricingTable" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="price-value">
                    <span class="amount">$20</span>
                    <span class="duration">per month</span>
                </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"30px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:30px;font-style:normal;font-weight:800;margin-bottom:20px;text-transform:uppercase">STANDARD</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"pricing-content"} -->
<ul class="pricing-content"><li>50GB Disk Space</li><li>50 Email Accounts</li><li>50GB Bandwidth</li><li>Maintenance</li><li>15 Subdomains</li></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"border":{"radius":"8px"},"color":{"background":"#fb7d58"}}} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link has-background" style="border-radius:8px;background-color:#fb7d58">Purchase Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"pricingTable"} -->
<div class="wp-block-column pricingTable" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="price-value">
                    <span class="amount">$49</span>
                    <span class="duration">per month</span>
                </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"30px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:30px;font-style:normal;font-weight:800;margin-bottom:20px;text-transform:uppercase">BUSINESS</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"pricing-content"} -->
<ul class="pricing-content"><li>50GB Disk Space</li><li>50 Email Accounts</li><li>50GB Bandwidth</li><li>Maintenance</li><li>15 Subdomains</li></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"border":{"radius":"8px"},"color":{"background":"#fb7d58"}}} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link has-background" style="border-radius:8px;background-color:#fb7d58">Purchase Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"pricingTable"} -->
<div class="wp-block-column pricingTable" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="price-value">
                    <span class="amount">$99</span>
                    <span class="duration">per month</span>
                </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"30px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:30px;font-style:normal;font-weight:800;margin-bottom:20px;text-transform:uppercase">PREMIUM</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"pricing-content"} -->
<ul class="pricing-content"><li>50GB Disk Space</li><li>50 Email Accounts</li><li>50GB Bandwidth</li><li>Maintenance</li><li>15 Subdomains</li></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"border":{"radius":"8px"},"color":{"background":"#fb7d58"}}} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link has-background" style="border-radius:8px;background-color:#fb7d58">Purchase Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
)
);
?>