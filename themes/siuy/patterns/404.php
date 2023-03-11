<?php
/**
 * Title:          404 Error
 * Slug:           siuy/404
 * Inserter:       no
 * 
 * @since          2.1.0
 * @package        siuy
 * @subpackage     siuy/patterns
 */

?>
<!-- wp:group {"templateLock":"contentOnly","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"inherit":false,"contentSize":"790px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"var(--wp--preset--spacing--50)"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"9rem"}},"textColor":"primary"} -->
<h1 class="has-text-align-center has-primary-color has-text-color" style="font-size:9rem"><?php esc_html_e( '404', 'siuy' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center" id="page-not-found"><?php esc_html_e( 'Page not found', 'siuy' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'siuy' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--50)"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
