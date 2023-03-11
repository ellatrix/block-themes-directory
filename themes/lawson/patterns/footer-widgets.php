<?php
/**
 * Title: Footer Widgets
 * Slug: lawson/footer-widgets
 * Inserter: no
*/
?>

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2vw","bottom":"2vw"}}}} -->
<div class="wp-block-columns" style="padding-top:2vw;padding-bottom:2vw">

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'About Lawson', 'lawson' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Lawson is a stunning and elegant theme made for the new WordPress Full Site Editor. The theme is completely built with blocks, comes with great typography and is packed with easy to use block patterns, multiple color schemes and several header and footer templates.', 'lawson' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

		<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
		<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Categories', 'lawson' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:categories {"className":"is-style-flip-link-hover"} /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

		<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
		<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Archives', 'lawson' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->