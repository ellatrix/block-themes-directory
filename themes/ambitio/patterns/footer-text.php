<?php
/**
 * Title: Footer Text
 * Slug: ambitio/footer-text
 * Inserter: no
*/
?>

<!-- wp:paragraph -->
<p>&copy; <?php echo wp_kses_post( date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->
