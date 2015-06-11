<?php // The Template for Comments ?>

<div id="comments">
	<?php if ( post_password_required() ) : ?>
    <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'wordpress' ); ?></p>
</div><!-- comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have to fully load the template
		 */
		return;
	endif;
?>

<?php if ( have_comments() ) : ?>
	<h5 id="comments-title">
		<?php printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'wordpress' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
		?>
	</h5>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <div class="navigation">
            <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'wordpress' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'wordpress' ) ); ?></div>
        </div> <!-- .navigation -->
    <?php endif; //check for comment navigation ?>

	<ol class="commentlist">
		<?php wp_list_comments( array( 'callback' => 'twentythirteen_comment' ) ); ?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <div class="navigation">
            <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'wordpress' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'wordpress' ) ); ?></div>
        </div><!-- .navigation -->
    <?php endif; //check for comment navigation ?>

<?php else : 
	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'wordpress' ); ?></p>
<?php endif; //end ! comments_open() ?>

<?php endif; //end have_comments() ?>

<?php comment_form(); ?>

</div><!-- #comments -->
