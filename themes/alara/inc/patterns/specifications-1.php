<?php
return array(
			'title'         => __( 'Specifications 1', 'alara' ),
			'categories'    => array( 'alara-features' ),
			'keywords'		=> array( 'features', 'info', 'media', 'image' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6em","bottom":"6em"}}},"backgroundColor":"secondary","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:6em;padding-bottom:6em"><!-- wp:media-text {"align":"","mediaPosition":"right","mediaLink":"' . alara_pattern_content( 'image-camera-lens' ) . '","mediaType":"image","imageFill":false,"backgroundColor":"background","textColor":"foreground"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile has-foreground-color has-background-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . alara_pattern_content( 'image-camera-lens' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="line-height:1"><em><strong>Product name introduction</strong></em></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1"}},"textColor":"foreground"} -->
<h2 class="has-foreground-color has-text-color" id="specification" style="line-height:1">Specifications</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:1"><strong>Features:</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list {"fontSize":"small","className":"is-style-line"} -->
<ul class="has-small-font-size is-style-line">' . alara_pattern_content( 'list' ) . '</ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->',
);
