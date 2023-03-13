<?php

$params = explode( ',', $argv[1] );

define( 'WP_CONTENT_URL', 'https://raw.githubusercontent.com/ellatrix/block-themes-directory/main' );

require_once '../gutenberg/wp-load.php';

add_filter( 'template', function() use ( $params ) {
    return $params[1];
} );

$output = require( $params[0] );

if ( $output && isset( $output['content'] ) ) {
    echo $output['content'];
}
