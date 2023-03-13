<?php

$params = explode( ',', $argv[1] );

define( 'WP_CONTENT_URL', 'https://raw.githubusercontent.com/ellatrix/block-themes-directory/main' );

require_once '../gutenberg/wp-load.php';

add_filter( 'template', function() use ( $params ) {
    return $params[1];
} );

$attributes = json_decode( base64_decode( $params[0] ) );

$html = file_get_contents( 'themes/' . $params[1] . '/parts/' . $attributes->slug . '.html' );

unset( $attributes->slug );

$attrs = new stdClass();

if ( isset( $attributes->align ) ) {
    $attrs->align = $attributes->align;
}

if ( isset( $attributes->tagName ) ) {
    $attrs->tagName = $attributes->tagName;
}

$attributes_enc = json_encode( $attrs );

$tagName = isset( $attributes->tagName ) ? $attributes->tagName : 'div';
$align = isset( $attributes->align ) ? ' align' . $attributes->align : '';

echo <<<END
<!-- wp:group $attributes_enc -->
<$tagName class="wp-block-group$align">$html</$tagName>
<!-- /wp:group -->
END;
