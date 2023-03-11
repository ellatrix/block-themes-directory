<?php
/**
 * Title: Call-to-action with text, buttons.
 * Slug: astory/general-cta-buttons
 * Categories: astory-cta
 * Viewport Width: 1280
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:0px">
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"className":"is-style-fill large"} -->
<div class="wp-block-button is-style-fill large"><a class="wp-block-button__link "><?php echo esc_html__( 'Get Started', 'astory' ); ?> →</a></div>
<!-- /wp:button -->
<!-- wp:button {"style":{"className":"is-style-outline large"} -->
<div class="wp-block-button is-style-outline large"><a class="wp-block-button__link "><?php echo esc_html__( 'Learn More', 'astory' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
