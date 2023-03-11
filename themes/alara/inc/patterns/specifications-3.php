<?php
return array(
			'title'         => __( 'Specifications 3', 'alara' ),
			'categories'    => array( 'alara-features' ),
			'keywords'		=> array( 'features', 'info', 'media', 'image' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6em","bottom":"6em"}}},"gradient":"foreground-tertiary","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-foreground-tertiary-gradient-background has-background" style="padding-top:6em;padding-bottom:6em"><!-- wp:media-text {"align":"","mediaLink":"' . alara_pattern_content( 'image-camera-lens' ) . '","mediaType":"image","imageFill":false,"backgroundColor":"white","textColor":"foreground"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-foreground-color has-white-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . alara_pattern_content( 'image-camera-lens' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"tertiary","fontSize":"small"} -->
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
<!-- /wp:list -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->',
);
