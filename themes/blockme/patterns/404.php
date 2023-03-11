<?php
/**
 * Title: 404 page
 * Slug: blockme/404
 * Categories: text, blockme
 * Block Types: core/search, core/group, core/heading, core/paragraph, core/spacer
 * Inserter: yes
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"20px","right":"0","bottom":"40px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:0;padding-bottom:40px;padding-left:0px"><!-- wp:group {"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-group alignwide"><!-- wp:spacer {"height":"clamp(1rem, calc(1rem + ((1vw - 0.48rem) * 5.7692)), 4rem)"} -->
<div style="height:clamp(1rem, calc(1rem + ((1vw - 0.48rem) * 5.7692)), 4rem)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"none"}}} -->
<h1 class="has-text-align-center" id="oops-that-page-can-t-be-found" style="text-transform:none"><?php echo esc_html__( 'Oops! That page can not be found.', 'blockme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"blockme-medium"} -->
<p class="has-text-align-center has-blockme-medium-font-size"><?php echo esc_html__( 'This page could not be found. Try searching posts using the search field.', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html__( 'Search...', 'blockme' ); ?>","buttonText":"<?php echo esc_html__( 'Search', 'blockme' ); ?>"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->