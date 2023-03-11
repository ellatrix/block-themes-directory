<?php
/**
  * Title: Home Features
  * Slug: cybercube/home-features
  * Categories: page
  */
?>
<?php

register_block_pattern(
	'cybercube/home-features',
	array(
	'title'         => __( 'Home Features', 'cybercube' ),
	'categories' => array( 'page' ),
	'content'       => '<!-- wp:group {"style":{"color":{"background":"#f9f9f9"},"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"className":"features","layout":{"contentSize":""}} -->
<div class="wp-block-group features has-background" style="background-color:#f9f9f9;padding-top:50px;padding-bottom:50px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#fb7d58"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#fb7d58;font-size:15px;font-style:normal;font-weight:600;text-transform:uppercase">FEATURES</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"20px"}}}} -->
<h2 class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:700;text-transform:capitalize;margin-bottom:20px">Amazing Features To Use Our Application</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor form.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"contentSize":"1100px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}}} -->
<div class="wp-block-columns" style="padding-top:50px;padding-bottom:50px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"featuresBox"} -->
<div class="wp-block-column featuresBox" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="features-icon">
            <span><i class="fa-solid fa-mobile"></i></span>
        </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"lead"} -->
<h2 class="has-text-align-center has-lead-font-size" style="font-style:normal;font-weight:700">Responsive Design</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore illum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"featuresBox"} -->
<div class="wp-block-column featuresBox" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="features-icon">
            <span><i class="fa-solid fa-lightbulb"></i></span>
        </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"lead"} -->
<h2 class="has-text-align-center has-lead-font-size" style="font-style:normal;font-weight:700">Discuss Idea</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore illum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"featuresBox"} -->
<div class="wp-block-column featuresBox" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="features-icon">
            <span><i class="fa-solid fa-layer-group"></i></span>
        </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"lead"} -->
<h2 class="has-text-align-center has-lead-font-size" style="font-style:normal;font-weight:700">Database Backups</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore illum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"featuresBox"} -->
<div class="wp-block-column featuresBox" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="features-icon">
            <span><i class="fa-solid fa-gears"></i></span>
        </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"lead"} -->
<h2 class="has-text-align-center has-lead-font-size" style="font-style:normal;font-weight:700">Powerful API</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore illum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"featuresBox"} -->
<div class="wp-block-column featuresBox" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="features-icon">
            <span><i class="fa fa-globe"></i></span>
        </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"lead"} -->
<h2 class="has-text-align-center has-lead-font-size" style="font-style:normal;font-weight:700">Web Design</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore illum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"className":"featuresBox"} -->
<div class="wp-block-column featuresBox" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:html -->
<div class="features-icon">
            <span><i class="fa-solid fa-shield"></i></span>
        </div>
<!-- /wp:html -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"lead"} -->
<h2 class="has-text-align-center has-lead-font-size" style="font-style:normal;font-weight:700">Advanced Security</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore illum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
)
);
?>