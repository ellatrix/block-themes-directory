<?php
 /**
  * Title: Sidebar One
  * Slug: gutenify-template-kit/sidebar-1
  * Categories: gutenify-template-kit
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"className":"has-no-hover-shadow-dark"} -->
<div class="wp-block-group has-no-hover-shadow-dark" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}}} -->
<div class="wp-block-group"><!-- wp:search {"label":"","showLabel":false,"buttonText":"Search"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3><?php echo esc_html__( 'Archive', 'gutenify-template-kit' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:archives /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3><?php echo esc_html__( 'Category', 'gutenify-template-kit' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3><?php echo esc_html__( 'Latest Posts', 'hello-template-kit' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:latest-posts {"displayAuthor":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75} /--></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3><?php echo esc_html__( 'Tags', 'hello-template-kit' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:tag-cloud /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
