<?php
/**
 * Core Single Post Title content.
 */
return array(
	'title'      => __( 'Core Single Post Title', 'accountra' ),
	'categories' => array( 'accountra-basic' ),
	'content'    => '<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( ACCOUNTRA_URI ) . 'assets/img/analysis-brainstorming-business-businessman-businesswoman-collaboration-1455461-pxhere.com.webp","id":176,"dimRatio":80,"overlayColor":"black","focalPoint":{"x":"0.47","y":"0.52"},"minHeight":449,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"150px"}}}} -->
			<div class="wp-block-cover" style="padding-bottom:150px;min-height:449px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-176" alt="" src="' . esc_url( ACCOUNTRA_URI ) . 'assets/img/analysis-brainstorming-business-businessman-businesswoman-collaboration-1455461-pxhere.com.webp" style="object-position:47% 52%" data-object-fit="cover" data-object-position="47% 52%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"accountra"} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"130px"}}},"layout":{"wideSize":"890px","contentSize":"890px"}} -->
			<div class="wp-block-group" style="padding-top:130px"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"","layout":{"contentSize":"1140px"}} -->
			<div class="wp-block-column"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"third","fontSize":"extra-large"} /-->
			
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:post-author {"textAlign":"left","showAvatar":false,"showBio":false,"byline":"","textColor":"third"} /-->

			<!-- wp:post-date {"textColor":"third"} /-->

			<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}} /-->

			<!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:group -->',
);
