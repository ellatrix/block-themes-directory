<?php
/**
 * Footer Text block pattern
 */
return array(
	'title'    => __( 'Footer Text', 'charta' ),
	'inserter' => false,
	'content'  => '<!-- wp:paragraph -->
					<p>&copy; ' . wp_kses_post( date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ) ) . '</p>
					<!-- /wp:paragraph -->',
);
