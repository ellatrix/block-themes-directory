<?php
/**
 * Title: Footer with social icon
 * Slug: spice-fse/footer-social-icon
 * Categories: spice-fse
 * Block Types: core/footer-social-icon
 */
?>
<!-- wp:group {"className":"copy-write-block"} -->
<div class="wp-block-group copy-write-block"><!-- wp:columns {"style":{"color":{"background":"#6e7bff"},"spacing":{"padding":{"top":"10px","right":"0px","bottom":"10px","left":"0px"}}}} -->
<div class="wp-block-columns has-background" style="background-color:#6e7bff;padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color" style="font-size:18px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Proudly powered by ', 'spice-fse' ); ?>
<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'spice-fse' ) ) ?> " rel="nofollow">WordPress</a> <?php echo esc_html__('| Theme: ', 'spice-fse' ); ?><a href="<?php echo esc_url( __( 'https://spicethemes.com/spice-fse', 'spice-fse' ) ) ?> "><?php echo esc_html__('Spice FSE', 'spice-fse' ); ?></a> <?php echo esc_html__('by', 'spice-fse' ); ?><a href="<?php echo esc_url( __( 'https://spicethemes.com/', 'spice-fse' ) ) ?> " rel="nofollow"> <?php echo esc_html__('Spicethemes', 'spice-fse' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:social-links {"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"amazon"} /-->

<!-- wp:social-link {"url":"#","service":"fivehundredpx"} /-->

<!-- wp:social-link {"url":"#","service":"google"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->