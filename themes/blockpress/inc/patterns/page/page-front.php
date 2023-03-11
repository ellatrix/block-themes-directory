<?php
/**
 * Blockpress: Link page with image, buttons
 *
 * @package Blockpress
 */

return array(
	'title'      => __( 'Home page Variant', 'blockpress' ),
	'categories' => array( 'blockpress-page' ),
	'inserter' => false,
	'content'    => '
	<!-- wp:pattern {"slug":"blockpress/hero/hero-front"} /-->
	<!-- wp:pattern {"slug":"blockpress/general/general-features"} /-->
	<!-- wp:pattern {"slug":"blockpress/general/general-banner-negative-top"} /-->
	<!-- wp:pattern {"slug":"blockpress/general/general-user-feedback"} /-->
	<!-- wp:pattern {"slug":"blockpress/general/general-qa"} /-->
	<!-- wp:pattern {"slug":"blockpress/general/general-latest-query"} /-->
	<!-- wp:pattern {"slug":"blockpress/general/general-banner-footer"} /-->',
);