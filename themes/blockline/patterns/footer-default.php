<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: blockline
 */

return array(
    'title'      =>__( 'Footer Default', 'blockline' ),
    'categories' => array( 'blockline' ),
    'content'    => '<!-- wp:group {"backgroundColor":"bg-sec","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-bg-sec-background-color has-background"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"20px","left":"20px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading -->
<h2>'.esc_html__('About US','blockline').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>'.esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','blockline').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading -->
<h2>'.esc_html__('Contact US','blockline').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><span class="dashicons dashicons-email-alt"></span>  '.esc_html__('info@company.com','blockline').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-phone"></span>  '.esc_html__('+123 456 789','blockline').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-admin-home"></span>  '.esc_html__('2080 Peaceful Lane, Chicago,IL, USA','blockline').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<main class="wp-block-column"><!-- wp:heading -->
<h2>Latest Post</h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"style":{"typography":{"lineHeight":"2"}}} /--></main>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">'.esc_html__('Proudly powered by','blockline').'  <a href="https://themehunk.com/" data-type="URL" data-id="https://themehunk.com/" target="_blank" rel="noreferrer noopener">'.esc_html__('Themehunk','blockline').'</a></p>
<!-- /wp:paragraph -->


',
);