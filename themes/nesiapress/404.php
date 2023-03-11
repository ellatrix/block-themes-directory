<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nesiapress
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="np-container">
		<section class="error-404">
			<div class="np-page-none-container">
				<p class="np-page-none-text"><?php esc_html_e( '404', 'nesiapress' ); ?></p>
				<div class="np-page-none-entry">
					<div class="np-page-none-info">
						<h1 class="np-page-none-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nesiapress' ); ?></h1>
						<p class="np-page-none-description"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nesiapress' ); ?></p>
					</div>
					<div class="np-search-form-entry">
						<div class="np-search-form">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->
	</div><!-- .np-container -->
</main><!-- #primary -->

<?php
get_footer();
