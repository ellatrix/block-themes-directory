<?php
/**
 * Title: Hero area
 * Slug: blockme/hero
 * Categories: featured, blockme
 * Block Types: core/cover, core/buttons, core/button, core/heading, core/paragraph
 * Inserter: yes
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-image.jpg' ) ); ?>","id":4088,"dimRatio":10,"align":"full","style":{"color":{"duotone":["#000000","#00a5ff"]},"spacing":{"padding":{"top":"50px","right":"30px","bottom":"50px","left":"30px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:50px;padding-right:30px;padding-bottom:50px;padding-left:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4088" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-image.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"15px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|blockme-ghostwhite"}}}},"textColor":"blockme-ghostwhite","fontSize":"blockme-smaller"} -->
<p class="has-text-align-center has-blockme-ghostwhite-color has-text-color has-link-color has-blockme-smaller-font-size" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:15px;padding-left:0px;font-style:normal;font-weight:300"><?php echo esc_html__( 'Lorem ipsum dolor sit amet', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"25px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"textColor":"blockme-white","fontSize":"blockme-2x-large"} -->
<h2 class="has-text-align-center has-blockme-white-color has-text-color has-blockme-2-x-large-font-size" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:25px;padding-left:0px;font-style:normal;font-weight:700"><?php echo esc_html__( 'BlockMe WordPress Theme', 'blockme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|blockme-ghostwhite"}}}},"textColor":"blockme-ghostwhite"} -->
<p class="has-text-align-center has-blockme-ghostwhite-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px;font-size:16px"><?php echo esc_html__( 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text.', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"blockme-crimson","textColor":"blockme-white","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"10px","right":"35px","bottom":"10px","left":"35px"}},"border":{"radius":"50px"}},"fontSize":"blockme-small"} -->
<div class="wp-block-button has-custom-font-size has-blockme-small-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-blockme-white-color has-blockme-crimson-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px"><?php echo esc_html__( 'Get Started', 'blockme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->