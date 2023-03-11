<?php
/**
 * Title: Postmeta
 * Slug: ambitio/postmeta-single
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-light-gray-color has-text-color has-link-color">

	<!-- wp:paragraph -->
	<p><?php _e( 'Posted on', 'ambitio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-date {"isLink":true} /-->

	<!-- wp:paragraph -->
	<p><?php _e( 'by', 'ambitio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-author {"showAvatar":false} /-->

	<!-- wp:paragraph -->
	<p><?php _e( 'in', 'ambitio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-terms {"term":"category"} /-->

</div>
<!-- /wp:group -->
