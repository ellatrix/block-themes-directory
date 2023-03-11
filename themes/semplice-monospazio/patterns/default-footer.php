<?php
/**
 * Title: Default Footer Pattern.
 * Slug: semplice-monospazio/footer
 * Categories: semplice-monospazio-footer
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"50px","right":"15px","bottom":"50px","left":"15px"},"blockGap":"10px"}},"className":"site-footer-pattern","layout":{"inherit":true}} -->
<footer class="wp-block-group alignfull site-footer-pattern" style="padding-top:50px;padding-right:15px;padding-bottom:50px;padding-left:15px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">&copy; <?php echo esc_html__( 'Copyright', 'semplice-monospazio' ) . ' ' . esc_html( date( 'Y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"textAlign":"center","align":"wide","style":{"typography":{"fontSize":"60px"},"spacing":{"margin":{"bottom":"3rem"}}}} /-->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#262626","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"service":"facebook"} /-->

<!-- wp:social-link {"service":"twitter"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"linkedin"} /-->

<!-- wp:social-link {"service":"youtube"} /-->

<!-- wp:social-link {"service":"github"} /-->

<!-- wp:social-link {"service":"twitch"} /-->

<!-- wp:social-link {"service":"codepen"} /-->

<!-- wp:social-link {"service":"patreon"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:navigation {"ref":2113,"showSubmenuIcon":false,"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /--></footer>
<!-- /wp:group -->
