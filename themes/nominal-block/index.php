<?php
/**
 * Fallback file in case Gutenberg and Full Site Editing are not enabled.
 *
 * @package Nominal_Block
 * @since 1.0.0
 */


if ( current_user_can( 'activate_plugins' ) ) {
    esc_html_e( 'This theme was built for the WordPress experimental Full Site Editing feature. You need to install and activate the Gutenberg plugin to make it work. ', 'nominal-block' );
}
