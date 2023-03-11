<?php
/**
 * Title:          Vanilla Hero
 * Categories:     cover
 * Slug:           siuy/hero-vanilla
 * Inserter:       yes
 * Keywords:       hero, recent posts
 * Block Types:    core/latest-posts
 * 
 * @since          2.1.0
 * @package        siuy
 * @subpackage     siuy/patterns
 */

?>
<!-- wp:group {"templateLock":"contentOnly","className":"alignfull", "align":"full","style":{"spacing":{"padding":{"top":"11vh","bottom":"11vh"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tile","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-tile-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:11vh;padding-bottom:11vh"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"228px","textTransform":"uppercase","letterSpacing":"60px","lineHeight":".8"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"primary","className":"is-style-vertical-on-mobile"} -->
<h1 class="has-text-align-center is-style-vertical-on-mobile has-primary-color has-text-color" style="font-size:228px;line-height:.8;text-transform:uppercase;letter-spacing:60px;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e( 'siuy', 'siuy' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:verse {"textAlign":"center","style":{"typography":{"fontSize":"24px","letterSpacing":"5px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"dark","fontFamily":"secondary"} -->
<pre class="wp-block-verse has-text-align-center has-dark-color has-text-color has-secondary-font-family" style="font-size:24px;font-style:normal;font-weight:700;text-transform:uppercase;letter-spacing:5px"><?php esc_html_e( 'EST 2017', 'siuy' ); ?></pre>
<!-- /wp:verse -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--20)"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"backgroundColor":"text-lighter","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-text-lighter-color has-alpha-channel-opacity has-text-lighter-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"excerptLength":17,"displayPostDate":true,"postLayout":"grid","className":"is-style-separator-between"} /-->

<!-- wp:separator {"backgroundColor":"text-lighter","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-text-lighter-color has-alpha-channel-opacity has-text-lighter-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
