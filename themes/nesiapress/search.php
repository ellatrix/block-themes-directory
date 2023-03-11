<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nesiapress
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="np-container">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'nesiapress' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			
			<div class="np-grid-entries">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'inc/template-parts/content', 'search' );

				endwhile;?>
			</div>

		<?php else :

			get_template_part( 'inc/template-parts/content', 'none' );

		endif; ?>
	</div>

	<?php the_np_posts_pagination(); ?>

</main><!-- #primary -->

<?php
get_footer();
