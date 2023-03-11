<?php
/**
 * 404 section block pattern
 *
 * @package coming-soon-block
 *
 * @link https://core.trac.wordpress.org/ticket/54272
 *
 * @since 1.0.1
 */

return array(
    'title'      => esc_html__('404 section', 'coming-soon-block'),
    'categories' => array( 'coming-soon-block-patterns' ),
    'inserter'   => true,
    'content'    => '
	<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('assets/images/macro-leaves_JZ1LPL2IZB.jpg')) . '","id":454,"dimRatio":50} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-454" alt="" src="' . esc_url(get_theme_file_uri('assets/images/macro-leaves_JZ1LPL2IZB.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"className":"hero-heading","fontSize":"large"} -->
<h1 class="has-text-align-center hero-heading has-large-font-size">404 Not Found</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:social-links {"openInNewTab":true,"showLabels":true,"align":"center","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"pinterest.com","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
	',
);
