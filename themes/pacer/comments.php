<?php
/**
 * Comments template
 *
 * @package Enovetor/Pacer
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>
	<h3 id="comments">
		<?php
		printf(
			esc_html( /* translators: 1: number of comments */
				_nx(
					'%1$s Response',
					'%1$s Responses',
					get_comments_number(),
					'Comments title',
					'pacer'
				)
			),
			esc_html( number_format_i18n( get_comments_number() ) )
		);
		?>
	</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments( array( 'avatar_size' => 64 ) ); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>
<?php else : // This is displayed if there are no comments so far. ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	<?php else : // Comments are closed. ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'pacer' ); ?></p>

	<?php endif; ?>

<?php endif; ?>

<?php comment_form(); ?>
