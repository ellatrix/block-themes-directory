<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nesiapress
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

if ( ! function_exists( 'nesiapress_footer_hook' ) ) {
   add_action( 'nesiapress_footer', 'nesiapress_footer_hook' );
   /**
      * Build the nesiapress footer.
      *
      * @since 2.1.0
      */
   function nesiapress_footer_hook() {

   /**
    * nesiapress_before_footer hook.
    *
    * @since 2.1.0
    *
    */
   do_action( 'nesiapress_before_footer' ); ?>

	<footer id="colophon" class="site-footer">
		<div class="np-container">
			<nav class="footer-nav-menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
					)
				);
			?>
			</nav>
			<div class="site-info">
				<a class="wp-site" href="<?php echo esc_url( __( 'https://wordpress.org/', 'nesiapress' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Build with %s', 'nesiapress' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme by %2$s', 'nesiapress' ), 'NesiaPress', '<a class="np-site" href="https://nesiapress.com/">NesiaPress</a>' );
					?>
			</div><!-- .site-info -->

         <?php
         /**
          * nesiapress_after_site_info hook.
          *
          * @since 2.1.0
          *
          */
         do_action( 'nesiapress_after_site_info' );?>
		</div><!-- .np-container -->
	</footer><!-- #colophon -->
   
   <?php
   /**
    * nesiapress_after_footer hook.
    *
    * @since 2.1.0
    *
    */
   do_action( 'nesiapress_after_footer' );

   }
}
