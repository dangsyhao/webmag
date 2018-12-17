<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="section-row">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
    <div class="section-title">
		<h2 class="comments-title">
			<?= get_comments_number()." Comments";?>
		</h2>
    </div>
		<div class="post-comments">
			<?php
				wp_list_comments( array(
					'avatar_size' => 70,
					'style'       => 'div',
					'short_ping'  => true,
                    'walker'      => new Webmag_list_comment_walker()

				) );
			?>
		</div>

		<?php

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<div class="no-comments"><?php _e( 'Comments are closed.', WEBMAG ); ?></div>
	<?php
	endif;

/*
 * Load Comment Form !
 */
webmag_form();

	?>

</div><!-- #comments -->
