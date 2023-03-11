<?php

/**
 * Itinerary Archive Template
 *
 * This template can be overridden by copying it to yourtheme/wp-travel/archive-itineraries.php.
 *
 * HOWEVER, on occasion wp-travel will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see         http://docs.wensolutions.com/document/template-structure/
 * @author      WenSolutions
 * @package     WP_Travel
 * @since       1.0.0
 */

$sanitized_get = WP_Travel::get_sanitize_request('get', true);
$view_mode     = wptravel_get_archive_view_mode($sanitized_get);

?>
<!DOCTYPE html>
<html>

<head>
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
	<?php
	$block_content_header = '<!-- wp:template-part {"slug":"header","theme":"travel-init"} /-->';
	echo do_blocks($block_content_header);
	echo do_blocks('<!-- wp:template-part {"slug":"archive-banner","theme":"travel-init"} /-->');

	?>

	<div id="page" class="wrapper">
		<?php do_action('wp_travel_before_main_content'); ?>

		<div id="wptravel-archive-wrapper" class="wptravel-archive-wrapper <?php echo esc_attr('grid' === $view_mode ? 'grid-view' : ''); ?> ">
			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					wptravel_get_template_part('v2/content', 'archive-itineraries');
				endwhile; // end of the loop.
			else :
				wptravel_get_template_part('v2/content', 'archive-itineraries-none');
			endif;
			?>
		</div>
		<?php
		do_action('wp_travel_archive_listing_sidebar');

		do_action('wp_travel_after_main_content');
		?>
	</div>
	<?php
	$block_content_footer = '<!-- wp:template-part {"slug":"footer","theme":"travel-init"} /-->';
	echo do_blocks($block_content_footer);
	?>
	<?php wp_footer(); ?>
</body>