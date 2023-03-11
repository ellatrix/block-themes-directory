<?php
/**
 * Title: Default footer
 * Slug: blockme/footer
 * Categories: footer, columns, text, blockme
 * Block Types: core/template-part/footer, core/social-links, core/social-link, core/latest-posts, core/group, core/columns, core/column, core/heading, core/paragraph
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"block-new-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide block-new-footer" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|blockme-lightgray"}}},"typography":{"lineHeight":"1.8"},"spacing":{"padding":{"right":"15px","top":"25px","bottom":"25px","left":"15px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"blockme-darkgray","textColor":"blockme-ghostwhite","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-blockme-ghostwhite-color has-blockme-darkgray-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:25px;padding-right:15px;padding-bottom:25px;padding-left:15px;line-height:1.8"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"blockme-white","fontSize":"blockme-medium"} -->
<h3 class="has-blockme-white-color has-text-color has-blockme-medium-font-size"><?php echo esc_html__( 'About', 'blockme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nostrum aliquam occaecati optio optio! Tempore culpa recusandae, adipiscing inventore officia quod deserunt, nesciunt sollicitudin commodo quo ipsam dignissim inceptos explicabo elementum sequi semper dignissim quis.', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"openInNewTab":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"10px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size is-style-default"><!-- wp:social-link {"url":"https://twitter.com/home","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"blockme-white","fontSize":"blockme-medium"} -->
<h3 class="has-blockme-white-color has-text-color has-blockme-medium-font-size"><?php echo esc_html__( 'Contact', 'blockme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '3558 Ford Street, Santa Clara. 2721, IL, USA', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '(+880) 123 3456 7890', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'info@companyname.com', 'blockme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Opening Hours: 08:00 20:00', 'blockme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textColor":"blockme-white","fontSize":"blockme-medium"} -->
<h2 class="has-blockme-white-color has-text-color has-blockme-medium-font-size"><?php echo esc_html__( 'Recent Posts', 'blockme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|blockme-white"}}},"spacing":{"padding":{"top":"15px","bottom":"15px","right":"15px","left":"15px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}},"border":{"top":{"color":"#444444","width":"1px"}}},"backgroundColor":"blockme-black","textColor":"blockme-white","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-blockme-white-color has-blockme-black-background-color has-text-color has-background has-link-color" style="border-top-color:#444444;border-top-width:1px;margin-top:0px;margin-bottom:0px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'blockme' ), esc_html(date_i18n(__('Y','blockme'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'blockme' ), 'ThemesDNA.com' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->