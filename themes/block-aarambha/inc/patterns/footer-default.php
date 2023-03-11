<?php
/**
 * Footer Default
 */

return array(
	'title'      => esc_html__( 'Default Footer', 'block-aarambha' ),
	'categories' => array( 'block-aarambha' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
        <!-- wp:pattern {"slug":"block-aarambha/follow-subscribe"} /-->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","right":"24px","left":"24px"}}},"backgroundColor":"black","textColor":"ti-fg-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group has-ti-fg-alt-color has-black-background-color has-text-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"regular"} -->
        <p class="has-text-align-center has-white-color has-text-color has-regular-font-size">' . sprintf( __( 'Copyright © %d Block Aarambha — Powered by ', 'block-aarambha' ), date_i18n( 'Y' ) ) . '<a href="' . esc_url('https://www.aarambhathemes.com/') . '">' . esc_html__('Aarambha Themes', 'block-aarambha') . '</a></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->',
);
