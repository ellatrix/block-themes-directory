<?php
/**
 * Call wp_footer()
 *
 * @package Responsive_FSE
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 * @since 1.0
 */

?>
	<?php
	if ( function_exists( 'gutenberg_do_block_template_part' ) ) {
		gutenberg_do_block_template_part( 'footer' );
	}
	?>
	</main>
</div>

<?php wp_footer(); ?>
</body>
