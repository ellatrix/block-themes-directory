<?php
/**
 * Search widget block pattern
 */
return array(
	'title'      => __( 'Search Widget Panel', 'sicily' ),
	'categories' => array( 'theme', 'featured', 'widgets' ),
	'content'    => '<!-- wp:group {"className":"panel"} -->
                    <div class="wp-block-group panel"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
                    <!-- /wp:group -->',
);
