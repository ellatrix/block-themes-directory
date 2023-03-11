<?php
/**
 * Title: Section with cover, heading, text, button.
 * Slug: design-mode/general-text-cover
 * Categories: design-mode-general
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:60px;padding-bottom:60px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"80px"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h3 class="has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Online Workshop', 'design-mode' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}}},"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default" style="margin-top:0px"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"300","letterSpacing":"-1px"}},"fontSize":"max-48"} -->
<p class="has-max-48-font-size" style="font-style:normal;font-weight:300;line-height:1.1;letter-spacing:-1px"><?php echo esc_html__( 'Learn How to Connect and Create with Your Passion', 'design-mode' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus semper, nisi in cursus ultricies, ligula mi convallis risus, ut iaculis eros tortor ac magna. Aliquam tincidunt pharetra ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline" style="text-transform:uppercase"><a class="wp-block-button__link"><?php echo esc_html__( 'Join the Wait List', 'design-mode' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample.png'; ?>","id":99,"dimRatio":50,"minHeight":600,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-99" alt="Design Mode Sample Image" src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample.png'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
