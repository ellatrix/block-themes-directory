<?php

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e( 'This theme was built for the WordPress full-site-editing feature. If you use WordPress below version 5.9, you need to install and activate the Gutenberg plugin to make it work. ', 'startupzy' );
}
