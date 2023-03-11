<?php
/**
 * Title: Footer
 * Slug: elevated-lite/footer
 * Categories: elevated-lite, footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"bottom":"1em","top":"1em","right":"2em","left":"2em"},"margin":{"bottom":"70px"}}},"backgroundColor":"primary","textColor":"body-text","layout":{"type":"default"}} -->
<div class="wp-block-group has-body-text-color has-primary-background-color has-text-color has-background" style="border-style:none;border-width:0px;margin-bottom:70px;padding-top:1em;padding-right:2em;padding-bottom:1em;padding-left:2em"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"textColor":"Background","className":"footer-widget-title","fontSize":"large"} -->
<h3 class="footer-widget-title has-background-color has-text-color has-large-font-size"><?php esc_html_e('UPCOMING EVENTS AND SPECIAL OFFERS','elevated-lite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"10px"}}},"textColor":"secondary","fontSize":"huge"} -->
<h3 class="has-secondary-color has-text-color has-huge-font-size" style="margin-top:10px"><?php esc_html_e('GET WEEKLY NEWSLETTER','elevated-lite'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-radius:0px"><?php esc_html_e('Subscribe Now','elevated-lite'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|Background"}}},"spacing":{"margin":{"top":"50px"}}},"textColor":"Background","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-background-color has-text-color has-link-color" style="margin-top:50px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"letterSpacing":"2px"}},"fontSize":"huge"} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
<p style="line-height:1.8"><?php esc_html_e('In pulvinar aliquet fringilla. Mauris commodo justo eu dolor tristique iaculis. Proin sit amet velit iaculis, aliquet massa vel, suscipit ante. Mauris iaculis erat at pellentesque blandit. Morbi commodo enim at nulla scelerisque gravida. Sed vulputate viverra vulputate. Maecenas in scelerisque lorem, maximus ullamcorper mauris.','elevated-lite'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"Background","iconColorValue":"#ffffff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#ffa646","openInNewTab":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-pill-shape"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-pill-shape" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"textColor":"Background","className":"footer-widget-title","fontSize":"large"} -->
<h3 class="footer-widget-title has-background-color has-text-color has-large-font-size"><?php esc_html_e('Latest News','elevated-lite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":49,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0px"}}},"className":"truncate-line"} /-->

<!-- wp:separator {"backgroundColor":"body-text","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-body-text-color has-alpha-channel-opacity has-body-text-background-color has-background is-style-wide"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"textColor":"Background","className":"footer-widget-title","fontSize":"large"} -->
<h3 class="footer-widget-title has-background-color has-text-color has-large-font-size"><?php esc_html_e('Contact Us','elevated-lite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Morbi commodo enim at nulla scelerisque gravida. Sed vulputate viverra vulputate. Maecenas in scelerisque lorem, maximus ullamcorper mauris.','elevated-lite'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"textColor":"Background","className":"footer-widget-title","fontSize":"large"} -->
<h3 class="footer-widget-title has-background-color has-text-color has-large-font-size"><?php esc_html_e('Washington','elevated-lite'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":361,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/contact/pin.png' ); ?>" alt="" class="wp-image-361"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e('001, Washington, 2226 United States.','elevated-lite'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":362,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/contact/phone-call.png' ); ?>" alt="" class="wp-image-362"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="tel:<?php esc_html_e('+02 (231) 0000 11','elevated-lite'); ?>" data-type="tel" data-id="tel:"><?php esc_html_e('+02 (231) 0000 11','elevated-lite'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":363,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/contact/envelope.png' ); ?>" alt="" class="wp-image-363"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="mailto:<?php esc_html_e('info@example.com','elevated-lite'); ?>" data-type="mailto" data-id="mailto:"><?php esc_html_e('info@example.com','elevated-lite'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"Background"} -->
<p class="has-background-color has-text-color"><?php esc_html_e('© Copyright 2023. All Rights Reserved.','elevated-lite'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|Background"}}}},"textColor":"Background"} -->
<p class="has-background-color has-text-color has-link-color"><?php esc_html_e('Proudly powered by','elevated-lite'); ?> <a rel="noreferrer noopener" href="<?php echo esc_url('http://www.risingthemes.net/'); ?>" target="_blank"><?php esc_html_e('Rising Themes','elevated-lite'); ?></a> <?php esc_html_e('and','elevated-lite'); ?> <a href="<?php echo esc_url( __('https://wordpress.org','elevated-lite')); ?>"><?php esc_html_e('WordPress','elevated-lite'); ?></a> <a rel="noreferrer noopener" href="<?php echo esc_url('http://www.risingthemes.net/'); ?>" target="_blank">.</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->