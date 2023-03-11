<?php
/**
 * General: Projects business
 */
return array(
	'title'      => __( 'Projects business', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem","top":"100px","bottom":"100px"}}},"layout":{"contentSize":"1520px","type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:100px;padding-right:1.5rem;padding-bottom:100px;padding-left:1.5rem"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"48px"}}},"fontSize":"large"} -->
			<h2 class="has-large-font-size" style="margin-bottom:48px">' . __( 'Featured works you may be interested', 'ona' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:gallery {"columns":4,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
			<figure class="wp-block-gallery has-nested-images columns-4 is-cropped"><!-- wp:image {"id":314,"sizeSlug":"large","linkDestination":"custom","className":"hover-scale"} -->
			<figure class="wp-block-image size-large hover-scale"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/business/ona_business_project_1.jpg" alt="" class="wp-image-314"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":315,"sizeSlug":"large","linkDestination":"custom","className":"hover-scale"} -->
			<figure class="wp-block-image size-large hover-scale"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/business/ona_business_project_2.jpg" alt="" class="wp-image-315"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":316,"sizeSlug":"large","linkDestination":"custom","className":"hover-scale"} -->
			<figure class="wp-block-image size-large hover-scale"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/business/ona_business_project_3.jpg" alt="" class="wp-image-316"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":317,"sizeSlug":"large","linkDestination":"custom","className":"hover-scale"} -->
			<figure class="wp-block-image size-large hover-scale"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/business/ona_business_project_4.jpg" alt="" class="wp-image-317"/></a></figure>
			<!-- /wp:image --></figure>
			<!-- /wp:gallery --></div>
			<!-- /wp:group -->
			',
);



