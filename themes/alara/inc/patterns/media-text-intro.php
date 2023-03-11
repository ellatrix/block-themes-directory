<?php
return array(
			'title'         => __( 'Media and Text Intro', 'alara' ),
			'categories'    => array( 'alara-about' ),
			'keywords'		=> array( 'about', 'image' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . alara_pattern_content( 'image-camera-lens' ) . '","mediaType":"image","imageFill":false,"textColor":"foreground"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile has-foreground-color has-text-color"><figure class="wp-block-media-text__media"><img src="' . alara_pattern_content( 'image-camera-lens' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1"}},"textColor":"foreground","fontSize":"massive"} -->
<h1 class="has-foreground-color has-text-color has-massive-font-size" id="amelia" style="line-height:1">Our Vision</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="line-height:1"><em><strong>A warm welcome to our company and services.</strong></em></p>
<!-- /wp:paragraph -->

<!-- wp:list {"textColor":"primary","className":"is-style-check","fontSize":"small"} -->
<ul class="is-style-check has-primary-color has-text-color has-small-font-size"><li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-foreground-color">This is feature one</mark></li><li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-foreground-color">Item two included</mark></li><li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-foreground-color">Optional item three</mark></li></ul>
<!-- /wp:list --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"align":"full","mediaLink":"' . alara_pattern_content( 'image-camera' ) . '","mediaType":"image","imageFill":false,"backgroundColor":"foreground","textColor":"background","className":"is-style-no-block-gap"} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile is-style-no-block-gap has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . alara_pattern_content( 'image-camera' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1,"textColor":"primary","fontSize":"massive"} -->
<h1 class="has-primary-color has-text-color has-massive-font-size" id="about-us">About Us</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"huge"} -->
<p class="has-huge-font-size">Some words about <em><strong>our business.</strong></em></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->',
);
