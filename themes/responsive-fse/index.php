<?php
/**
 * Fallback file in case Gutenberg and Full Site Editing are not enabled.
 *
 * @package Responsive_FSE
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @since 1.0.0
 */

get_header();

if ( current_user_can( 'activate_plugins' ) ) {
	echo '<div style="max-width:40em;margin:3em auto;padding:4em;background:#000;color:#fff;">';
	esc_html_e( 'This theme requires the Gutenberg plugin installed. Please visit your dashboard and follow the instructions on the notification displayed to enable the plugin and the Full Site Editing experiment.', 'responsive-fse' );
	echo '</div>';
}
get_footer();
