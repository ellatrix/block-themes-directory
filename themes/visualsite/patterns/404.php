<?php
 /**
  * Title: 404
  * Slug: visualsite/404
  * Categories: visualsite
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":300,"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"background","fontSize":"large"} -->
<h1 class="has-text-align-center has-background-color has-text-color has-large-font-size"><?php esc_html_e('404 Error - Page Not Found', 'visualsite'); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, the page you are looking for is not available. Maybe you want to perform a search?', 'visualsite'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","buttonText":"Search"} /-->

<!-- wp:paragraph -->
<p><strong><?php esc_html_e('For best search results, mind the following suggestions:', 'visualsite'); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php esc_html_e('Always double check your spelling.', 'visualsite'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Try similar keywords, for example: tablet instead of laptop.', 'visualsite'); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Try using more than one keyword.', 'visualsite'); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
