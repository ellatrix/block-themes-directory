<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nesiapress
 */

?>

<!-- .no-results -->
<section class="no-results">

	<?php
	if ( is_home() && current_user_can( 'publish_posts' ) ) :

		printf(
			'<p class="page-none-description">' . wp_kses(
				/* translators: 1: link to WP admin new post page. */
				__( 'Ready to publish your first post? <a class="text-emerald-500" href="%1$s">Get started here</a>.', 'nesiapress' ),
				array(
					'a' => array(
						'href' => array(),
					),
				)
			) . '</p>',
			esc_url( admin_url( 'post-new.php' ) )
		);

	elseif ( is_search() ) : ?>

	<!-- .np-page-none-container -->
	<div class="np-page-none-container">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
		</svg>
		<!-- .np-page-none-entry -->
		<div class="np-page-none-entry">
			<!-- .np-page-none-info -->
			<div class="np-page-none-info">
				<!-- .np-page-none-title -->
				<h1 class="np-page-none-title"><?php esc_html_e( 'Nothing Found', 'nesiapress' ); ?></h1>
				<!-- .np-page-none-description -->
				<p class="np-page-none-description"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nesiapress' ); ?></p>
			</div>

			<!-- .np-search-form-entry -->
			<div class="np-search-form-entry">
				<!-- .np-search-form -->
				<div class="np-search-form">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
	
	<?php else : ?>

	<!-- .np-page-none-container -->
	<div class="np-page-none-container">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
		</svg>
		<!-- .np-page-none-entry -->
		<div class="np-page-none-entry">
			<!-- .np-page-none-info -->
			<div class="np-page-none-info">
				<!-- .np-page-none-title -->
				<h1 class="np-page-none-title"><?php esc_html_e( 'Nothing Found', 'nesiapress' ); ?></h1>
				<!-- .np-page-none-description -->
				<p class="np-page-none-description"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nesiapress' ); ?></p>
			</div>

			<!-- .np-search-form-entry -->
			<div class="np-search-form-entry">
				<!-- .np-search-form -->
				<div class="np-search-form">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>

	<?php endif; ?>
	
</section><!-- .no-results -->
