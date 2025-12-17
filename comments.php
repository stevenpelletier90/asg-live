<?php
/**
 * The template for displaying comments
 *
 * @package ASG_Live
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

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$asg_live_comment_count = get_comments_number();
			if ( '1' === $asg_live_comment_count ) {
				printf(
					/* translators: %s: post title */
					esc_html__( 'One comment on &ldquo;%s&rdquo;', 'asg-live' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count, 2: post title */
					esc_html( _n( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $asg_live_comment_count, 'asg-live' ) ),
					esc_html( number_format_i18n( $asg_live_comment_count ) ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'asg-live' ); ?></p>
			<?php
		endif;

	endif;

	comment_form();
	?>
</div>
