<?php
/**
 * Fullwidth template
 *
 * Template Name: Fullwidth Template
 *
 * @package        Responsive FSE
 * @author         CyberChimps
 * @copyright      Copyright (c) 2021, CyberChimps
 * @license        license.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

?>

<div id="wrapper" class="site-content clearfix">
	<div class="content-outer container">
		<div class="row">
			<main id="primary" class="content-area col-940" role="main">

				<?php if ( have_posts() ) : ?>

					<?php
					while ( have_posts() ) :
						the_post();
						?>

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="post-entry">
								<?php
								$args = array(
									'before' => '<div class="pagination">' . __( 'Pages:', 'responsive-fse' ),
									'after'  => '</div>',
								);
								the_content( __( 'Read more &#8250;', 'responsive-fse' ) );
								wp_link_pages( $args );
								?>
							</div><!-- end of .post-entry -->

							<?php
								edit_post_link( __( 'Edit', 'responsive-fse' ) );
							?>
						</div><!-- end of #post-<?php the_ID(); ?> -->
						<?php
					endwhile;

				endif;
				?>

			</main><!-- end of #content-full -->
		</div>
	</div>
</div> <!-- end of #wrapper -->
<?php
get_footer();
?>
