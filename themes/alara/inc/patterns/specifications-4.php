<?php
return array(
			'title'         => __( 'Specifications 4', 'alara' ),
			'categories'    => array( 'alara-features' ),
			'keywords'		=> array( 'features', 'info', 'media', 'image' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:media-text {"align":"","mediaLink":"' . alara_pattern_content( 'image-camera-lens-2' ) . '","mediaType":"image","imageFill":false,"backgroundColor":"white","textColor":"foreground"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-foreground-color has-white-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . alara_pattern_content( 'image-camera-lens-2' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-small-font-size" style="line-height:1"><em><strong>Product name introduction</strong></em></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1"}},"textColor":"foreground"} -->
<h2 class="has-foreground-color has-text-color" id="specification" style="line-height:1">Specifications</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1"><strong>Features:</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-circle","fontSize":"small"} -->
<ul class="is-style-circle has-small-font-size">' . alara_pattern_content( 'list' ) . '</ul>
<!-- /wp:list --></div></div>
<!-- /wp:media-text -->',
);
