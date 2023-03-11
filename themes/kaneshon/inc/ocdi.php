<?php

add_filter( 'ocdi/plugin_intro_text', 'kaneshon_ocdi_intro_text' );
function kaneshon_ocdi_intro_text( $html ) {
	$sample_content_url = 'https://www.cssigniter.com/docs/kaneshon/#sample-content';

	ob_start();
	?>
	<p><?php
		/* translators: %s is a url. */
		echo wp_kses_post( sprintf( __( 'Looking for the Kaneshon sample content files? Download them <a href="%s" target="_blank">here</a>.', 'kaneshon' ), esc_url( $sample_content_url ) ) );
	?></p>
	<hr>
	<?php

	$append_html = ob_get_clean();

	return $html . $append_html;
}

add_action( 'ocdi/after_import', 'kaneshon_ocdi_after_import_setup' );
function kaneshon_ocdi_after_import_setup() {

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Journal' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
}
