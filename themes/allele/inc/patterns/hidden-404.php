<?php
/**
 * Hidden 404 Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'    => __( 'Hidden 404', 'allele' ),
      'inserter' => false,
			'content'  => '<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 2.5rem)","left":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 2.5rem)"}}},"layout":{"inherit":true}} -->
  <div class="wp-block-group alignwide" style="padding-right:var(--wp--custom--spacing--small, 2.5rem);padding-left:var(--wp--custom--spacing--small, 2.5rem)">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"clamp(4rem, 40vw, 22rem)"}}} -->
    <h2 class="has-text-align-center" id="404" style="font-size:clamp(4rem, 40vw, 22rem);font-style:normal;font-weight:100">' . esc_html( _x( '404', 'Error code for a webpage that is not found.', 'allele' ) ) . '</h2>
    <!-- /wp:heading -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"layout":{"inherit":true}} -->
  <div class="wp-block-group">
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' . __( 'This page could not be found. Maybe try a search?', 'allele' ) . '</p>
    <!-- /wp:paragraph -->

    <!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","backgroundColor":"primary","textColor":"text-secondary"} /-->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"layout":{"inherit":true}} -->
  <div class="wp-block-group">
    <!-- wp:spacer {"height":120} -->
    <div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
