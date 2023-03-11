<?php
/**
 * Title: Author Box
 * Slug: smartcube/authors-box
 * Categories: smartcube_authors
*/
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"2vw"}},"backgroundColor":"light-gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-light-gray-background-color has-background">

	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-full is-style-rounded">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-avatar.png" alt=""/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:group -->
	<div class="wp-block-group">

		<!-- wp:paragraph -->
		<p><strong>John Doe</strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
