<?php
/**
 * Title: Footer Widgets
 * Slug: ambitio/footer-widgets
 * Inserter: no
*/
?>

<!-- wp:columns {"style":{"spacing":{"blockGap":"4vw","margin":{"bottom":"4vw"}}}} -->
<div class="wp-block-columns" style="margin-bottom:4vw">

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'About Ambitio', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Ambitio is a clean and lightweight block theme with modern colors and typography. The theme supports a huge range of block patterns, multiple header and footer block template parts as well as global style variants.', 'ambitio' ); ?></p>
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
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Categories', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:categories /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Archives', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:archives /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Stay in touch', 'ambitio' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only">

				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
