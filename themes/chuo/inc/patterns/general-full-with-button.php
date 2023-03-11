<?php
/**
 * Full width button block pattern
 */
return array(
    'title'      => __( 'Full width button', 'chuo' ),
    'categories' => array( 'theme', 'buttons' ),
    'content'    => '<!-- wp:group -->
                    <div class="wp-block-group"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"width":100} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link" href="#"><strong>' . wp_kses_post( __( 'Order now and get ¥200 OFF', 'chuo' ) ) . '</strong></a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div>
                    <!-- /wp:group -->',
);
