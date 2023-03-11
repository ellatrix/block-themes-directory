<?php
/**
 * Title: Hero section with title and short description
 * Slug: prowp/header-cover-1
 * Categories: header
 * Keywords: hero
 * Block Types: core/cover
 */
?>

<!-- wp:group {"templateLock":"contentOnly","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:cover {"dimRatio":90,"overlayColor":"base","minHeight":45,"minHeightUnit":"vh","isDark":false,"style":{"color":{"duotone":["#000000","#ffffff"]},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:45vh">
		<span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-90 has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
				<h1 class="has-text-align-center has-huge-font-size"><?php echo esc_html_x( 'Professional WordPress theme', 'sample title for section', 'prowp' ); ?></h1>
				<!-- /wp:heading -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"align":"center","textColor":"contrast","fontSize":"medium"} -->
					<p class="has-text-align-center has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Start using a professional WordPress theme by Themes Harbor to improve online presence, and take brand to next level', 'sample description for section', 'prowp' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
