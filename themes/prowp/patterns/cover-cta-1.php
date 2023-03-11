<?php
/**
 * Title: Call to action with text and button.
 * Slug: prowp/cover-cta-1
 * Categories: text
 * Keywords: call to action
 * Block Types: core/cover
 */
?>

<!-- wp:group {"templateLock":"contentOnly","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:cover {"dimRatio":90,"overlayColor":"base","isDark":false,"style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<div class="wp-block-cover is-light">
		<span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-90 has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size"><strong><?php echo esc_html_x( 'Start using a professional WordPress theme by Themes Harbor', 'sample description for section', 'prowp' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"fontSize":"normal"} -->
				<div class="wp-block-buttons has-custom-font-size has-normal-font-size">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://themesharbor.com/"><?php echo esc_html_x( 'Get started today', 'sample label for link', 'prowp' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
