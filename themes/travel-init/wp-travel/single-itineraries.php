<?php

/**
 *
 * This template can be overridden by copying it to yourtheme/wp-travel/single-itineraries.php.
 *
 * HOWEVER, on occasion wp-travel will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.wensolutions.com/document/template-structure/
 * @author  WenSolutions
 * @package WP_Travel
 * @since   1.0.0
 */
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
	
	echo do_blocks('<!-- wp:template-part {"slug":"single-banner","theme":"travel-init"} /-->');

	?>

	<div id="page" class="wrapper">

		<?php do_action('wp_travel_before_main_content'); ?>

		<?php

		while (have_posts()) :
			the_post();
			do_action('wptravel_single_itinerary_main_content');

		endwhile; // end of the loop.
		?>

	</div>
	<?php

	$block_content = '<!-- wp:template-part {"slug":"footer","theme":"travel-init"} /-->';

	echo do_blocks($block_content);

	?>
	<?php wp_footer(); ?>
</body>
