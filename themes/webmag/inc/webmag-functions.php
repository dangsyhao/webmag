<?php
// Dem View bai viet .

function webmag_set_post_views($postID){
    $count_key = 'webmag_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count=0;
        add_post_meta($postID, $count_key,$count);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//Dòng này để chắc chắc WordPress sẽ đếm chính xác hơn
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//Set Color Class Category
function set_color_menu(){
   $cat_objs=get_categories();
    $output=array();
    foreach ($cat_objs as $cat_obj){
       $cat_id=$cat_obj->cat_ID;
       $color=get_field('cat_color',"category_".$cat_id);

       $output[]='
       .nav-menu li.cate-'.$cat_id.' a:after{
                        background-color:'.$color.';
                    }
                    .nav-menu li.cate-'.$cat_id.' a:hover{
                        color:'.$color.'
                    }
       ';
   }
   echo "<style>".join('',$output)."</style>\n";
}
add_action('wp_footer', 'set_color_menu');


/*
 * Set Comment Template For Webmag
 */


function webmag_form( $args = array(), $post_id = null ) {
    if ( null === $post_id )
        $post_id = get_the_ID();

    // Exit the function when comments for the post are closed.
    if ( ! comments_open( $post_id ) ) {

        do_action( 'comment_form_comments_closed' );

        return;
    }

    $commenter = wp_get_current_commenter();
    $user = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';

    $args = wp_parse_args( $args );
    if ( ! isset( $args['format'] ) )
        $args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';

    $req      = get_option( 'require_name_email' );
    $html_req = ( $req ? " required='required'" : '' );
    $html5    = 'html5' === $args['format'];
    $fields   =  array(
        'author'  => '<div class="col-md-4"><div class="form-group"><span> Name *'.'<input id="author" name="author" class="input" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $html_req . ' /></span></div></div>',
        'email'   => '<div class="col-md-4"><div class="form-group"><span> Email *'.'<input id="email" name="email" class="input" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req . '/></span></div></div>',
        'url'     => '<div class="col-md-4"><div class="form-group"><span> Website'.'<input id="url" name="url" class="input" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></span></div></div>',
    );

    if ( has_action( 'set_comment_cookies', 'wp_set_comment_cookies' ) && get_option( 'show_comments_cookies_opt_in' ) ) {
        $consent           = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
        $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
            '<label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.' ) . '</label></p>';

        // Ensure that the passed fields include cookies consent.
        if ( isset( $args['fields'] ) && ! isset( $args['fields']['cookies'] ) ) {
            $args['fields']['cookies'] = $fields['cookies'];
        }
    }

    $required_text = sprintf( ' ' . __( 'Required fields are marked %s' ), '<span class="required">*</span>' );

    /**
     * Filters the default comment form fields.
     *
     * @since 3.0.0
     *
     * @param array $fields The default comment fields.
     */
    $fields = apply_filters( 'comment_form_default_fields', $fields );
    $defaults = array(
        'fields'               => $fields,
        'comment_field'        => '<div class="col-md-12"><div class="form-group"><textarea  name="comment" class="input" placeholder="Message" required="required"></textarea></div></div>',
        'must_log_in'          => '<div class="col-md-12"><p class="must-log-in">' . sprintf(
                __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
            ) . '</p></div>',
        'logged_in_as'         => '<div class="col-md-12"><p class="logged-in-as">' . sprintf(
                __( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
                get_edit_user_link(),
                esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
                $user_identity,
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
            ) . '</p></div>',

        'comment_notes_before' => '<div class="col-md-12"><p class="comment-notes"><span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'. ( $req ? $required_text : '' ) . '</p></div>',
        'comment_notes_after'  => '',
        'action'               => site_url( '/wp-comments-post.php' ),
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_form'           => 'comment-form',
        'class_submit'         => 'submit',
        'name_submit'          => 'submit',
        'title_reply'          => __( 'Leave A Reply' ),
        'title_reply_to'       => __( 'Leave A Reply to %s' ),
        'title_reply_before'   => '<div class="section-title"><h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h2></div>',
        'cancel_reply_before'  => ' <small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __( 'Cancel reply' ),
        'label_submit'         => __( 'Post Comment' ),
        'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="primary-button">SUBMIT</button>',
        'submit_field'         => '<div class="col-md-12"><div class="form-group">%1$s %2$s</div></div>',
        'format'               => 'xhtml',
    );

    /**
     * Filters the comment form default arguments.
     *
     * Use {@see 'comment_form_default_fields'} to filter the comment fields.
     *
     * @since 3.0.0
     *
     * @param array $defaults The default comment form arguments.
     */
    $args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );

    // Ensure that the filtered args contain all required default values.
    $args = array_merge( $defaults, $args );

    /**
     * Fires before the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_before' );
    ?>
    <div id="respond" class="section-row">
        <?php
        echo $args['title_reply_before'];

        comment_form_title( $args['title_reply'], $args['title_reply_to'] );

        echo $args['cancel_reply_before'];

        cancel_comment_reply_link( $args['cancel_reply_link'] );

        echo $args['cancel_reply_after'];

        echo $args['title_reply_after'];

        if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) :
            echo $args['must_log_in'];
            /**
             * Fires after the HTML-formatted 'must log in after' message in the comment form.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_must_log_in_after' );
        else : ?>
            <form action="<?php echo esc_url( $args['action'] ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>" class="post-reply" <?php echo $html5 ? ' novalidate' : ''; ?>>
                <div class="row">
                <?php
                /**
                 * Fires at the top of the comment form, inside the form tag.
                 *
                 * @since 3.0.0
                 */
                do_action( 'comment_form_top' );

                if ( is_user_logged_in() ) :
                    /**
                     * Filters the 'logged in' message for the comment form for display.
                     *
                     * @since 3.0.0
                     *
                     * @param string $args_logged_in The logged-in-as HTML-formatted message.
                     * @param array  $commenter      An array containing the comment author's
                     *                               username, email, and URL.
                     * @param string $user_identity  If the commenter is a registered user,
                     *                               the display name, blank otherwise.
                     */
                    echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );

                    /**
                     * Fires after the is_user_logged_in() check in the comment form.
                     *
                     * @since 3.0.0
                     *
                     * @param array  $commenter     An array containing the comment author's
                     *                              username, email, and URL.
                     * @param string $user_identity If the commenter is a registered user,
                     *                              the display name, blank otherwise.
                     */
                    do_action( 'comment_form_logged_in_after', $commenter, $user_identity );

                else :

                    echo $args['comment_notes_before'];

                endif;

                // Prepare an array of all fields, including the textarea
                $comment_fields = array( 'comment' => $args['comment_field'] ) + (array) $args['fields'];

                /**
                 * Filters the comment form fields, including the textarea.
                 *
                 * @since 4.4.0
                 *
                 * @param array $comment_fields The comment fields.
                 */
                $comment_fields = apply_filters( 'comment_form_fields', $comment_fields );

                // Get an array of field names, excluding the textarea
                $comment_field_keys = array_diff( array_keys( $comment_fields ), array( 'comment' ) );

                // Get the first and the last field name, excluding the textarea
                $first_field = reset( $comment_field_keys );
                $last_field  = end( $comment_field_keys );

                foreach ( $comment_fields as $name => $field ) {

                    if ( 'comment' === $name ) {

                        /**
                         * Filters the content of the comment textarea field for display.
                         *
                         * @since 3.0.0
                         *
                         * @param string $args_comment_field The content of the comment textarea field.
                         */
                        echo apply_filters( 'comment_form_field_comment', $field );

                        echo $args['comment_notes_after'];

                    } elseif ( ! is_user_logged_in() ) {

                        if ( $first_field === $name ) {
                            /**
                             * Fires before the comment fields in the comment form, excluding the textarea.
                             *
                             * @since 3.0.0
                             */
                            do_action( 'comment_form_before_fields' );
                        }

                        /**
                         * Filters a comment form field for display.
                         *
                         * The dynamic portion of the filter hook, `$name`, refers to the name
                         * of the comment form field. Such as 'author', 'email', or 'url'.
                         *
                         * @since 3.0.0
                         *
                         * @param string $field The HTML-formatted output of the comment form field.
                         */
                        echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";

                        if ( $last_field === $name ) {
                            /**
                             * Fires after the comment fields in the comment form, excluding the textarea.
                             *
                             * @since 3.0.0
                             */
                            do_action( 'comment_form_after_fields' );
                        }
                    }
                }

                $submit_button = sprintf(
                    $args['submit_button'],
                    esc_attr( $args['name_submit'] ),
                    esc_attr( $args['id_submit'] ),
                    esc_attr( $args['class_submit'] ),
                    esc_attr( $args['label_submit'] )
                );

                /**
                 * Filters the submit button for the comment form to display.
                 *
                 * @since 4.2.0
                 *
                 * @param string $submit_button HTML markup for the submit button.
                 * @param array  $args          Arguments passed to `comment_form()`.
                 */
                $submit_button = apply_filters( 'comment_form_submit_button', $submit_button, $args );

                $submit_field = sprintf(
                    $args['submit_field'],
                    $submit_button,
                    get_comment_id_fields( $post_id )
                );

                /**
                 * Filters the submit field for the comment form to display.
                 *
                 * The submit field includes the submit button, hidden fields for the
                 * comment form, and any wrapper markup.
                 *
                 * @since 4.2.0
                 *
                 * @param string $submit_field HTML markup for the submit field.
                 * @param array  $args         Arguments passed to comment_form().
                 */
                echo apply_filters( 'comment_form_submit_field', $submit_field, $args );

                /**
                 * Fires at the bottom of the comment form, inside the closing </form> tag.
                 *
                 * @since 1.5.0
                 *
                 * @param int $post_id The post ID.
                 */
                do_action( 'comment_form', $post_id );
                ?>
                </div>
            </form>
        <?php endif; ?>
    </div><!-- #respond -->
    <?php

    /**
     * Fires after the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_after' );
}



