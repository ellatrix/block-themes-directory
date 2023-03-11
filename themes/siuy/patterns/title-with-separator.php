<?php
/**
 * Title:          Title with Separator
 * Categories:     title
 * Slug:           siuy/title-with-separator
 * Inserter:       yes
 * Keywords:       title, heading
 * Block Types:    core/heading
 * 
 * @since          2.0.0
 * @package        siuy
 * @subpackage     siuy/patterns
 */

?>
<!-- wp:group {"templateLock":"contentOnly","style":{"spacing":{"blockGap":"var(--wp--preset--spacing--20)"}}} -->
<div class="wp-block-group"><!-- wp:verse {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"text-dark","fontFamily":"secondary"} -->
<pre class="wp-block-verse has-text-dark-color has-text-color has-secondary-font-family" style="text-transform:uppercase"><?php esc_html_e( 'Category title', 'siuy' ); ?></pre>
<!-- /wp:verse -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
