<?php
/**
 * Kemet General Patter
 * Combined Columns Displays Business Services
 */
return array(
	'title'      => __( 'Combined Columns Displays Business Services', 'kemet' ),
    'categories' => array( 'kemet-patterns' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"3px"},"spacing":{"margin":{"right":"0px","left":"0px","top":"0px","bottom":"15px"}}},"textColor":"primary"} -->
<h5 class="has-primary-color has-text-color" style="font-style:normal;font-weight:700;margin-top:0px;margin-right:0px;margin-bottom:15px;margin-left:0px;text-transform:uppercase;letter-spacing:3px">' . esc_html__( 'Our Services', 'kemet') . '</h5>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.2;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'We Have got all your cleaning needs covered.', 'kemet') . '</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:400">' . esc_html__( 'With over 25 years of experience cleaning everything from houses to offices, you can trust us with your health and safety.', 'kemet') . '</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"5px"},"typography":{"fontSize":"18px"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link" style="border-radius:5px"><strong>' . esc_html__( 'Contact Us', 'kemet') . '</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"style":"dashed","color":"#02283b4d","width":"1px"},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"25px","left":"15px"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-border-color has-secondary-background-color has-background" style="border-color:#02283b4d;border-style:dashed;border-width:1px;padding-top:15px;padding-right:15px;padding-bottom:25px;padding-left:15px"><!-- wp:image {"id":1503,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/carpet-cleaning-img.jpg" alt="" class="wp-image-1503"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h4 class="has-text-align-center" style="font-style:normal;font-weight:700"><a href="#">' . esc_html__( 'Carpet Cleaning', 'kemet') . '</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color" style="font-style:normal;font-weight:400">' . esc_html__( 'Donec rutrum congue leo eget malesuada praesent sed.', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"style":"dashed","color":"#02283b4d","width":"1px"},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"25px","left":"15px"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-border-color has-secondary-background-color has-background" style="border-color:#02283b4d;border-style:dashed;border-width:1px;padding-top:15px;padding-right:15px;padding-bottom:25px;padding-left:15px"><!-- wp:image {"id":1501,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/residential-cleaning-img.jpg" alt="" class="wp-image-1501"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h4 class="has-text-align-center" style="font-style:normal;font-weight:700"><a href="#">' . esc_html__( 'Residential Cleaning', 'kemet') . '</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color" style="font-style:normal;font-weight:400">' . esc_html__( 'Donec rutrum congue leo eget malesuada praesent sed.', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"style":"dashed","color":"#02283b4d","width":"1px"},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"25px","left":"15px"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-border-color has-secondary-background-color has-background" style="border-color:#02283b4d;border-style:dashed;border-width:1px;padding-top:15px;padding-right:15px;padding-bottom:25px;padding-left:15px"><!-- wp:image {"id":1502,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/window-cleaning-img.jpg" alt="" class="wp-image-1502"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h4 class="has-text-align-center" style="font-style:normal;font-weight:700"><a href="#">' . esc_html__( 'Window Cleaning', 'kemet') . '</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color" style="font-style:normal;font-weight:400">' . esc_html__( 'Donec rutrum congue leo eget malesuada praesent sed.', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"style":"dashed","color":"#02283b4d","width":"1px"},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"25px","left":"15px"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-border-color has-secondary-background-color has-background" style="border-color:#02283b4d;border-style:dashed;border-width:1px;padding-top:15px;padding-right:15px;padding-bottom:25px;padding-left:15px"><!-- wp:image {"id":1500,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/company-cleaning-img.jpg" alt="" class="wp-image-1500"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h4 class="has-text-align-center" style="font-style:normal;font-weight:700"><a href="#">' . esc_html__( 'Company Cleaning', 'kemet') . '</a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color" style="font-style:normal;font-weight:400">' . esc_html__( 'Donec rutrum congue leo eget malesuada praesent sed.', 'kemet') . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);