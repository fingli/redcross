<?php
/**
 * Template: Comments.php
 *
 * @package RedCross
 * @subpackage Template
 */

// Make sure comments.php doesn't get loaded directly
if ( !empty( $_SERVER[ 'SCRIPT_FILENAME' ] ) && 'comments.php' == basename( $_SERVER[ 'SCRIPT_FILENAME' ] ) )
	die ( 'Please do not load this page directly. Thanks!' );

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.', 'redline' );?></p>
<?php return; } ?>

<?php if ( have_comments() ) : // If comments exist for this entry, continue ?>
<!--BEGIN #comments-->
<div id="comments">
<?php if ( ! empty( $comments_by_type['comment'] ) ) { ?>
	<?php framework_discussion_title( 'comment' ); ?>
	<?php framework_discussion_rss(); ?>

	<?php // Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<!--BEGIN .navigation-links-->
	<div class="navigation-links comment-navigation">
		<div class="nav-previous"><?php previous_comments_link( '&laquo; ' . __( 'Older Comments', 'redline' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'redline' ) . ' &raquo;' ); ?></div>
	</div><!--END .navigation-links-->
	<?php endif; // comment navigation ?>

	<!--BEGIN .comment-list-->
	<ol class="comment-list">
		<?php wp_list_comments(array(
		'type'         => 'comment',
		'callback'     => 'framework_comments_callback',
		'end-callback' => 'framework_comments_endcallback' )); ?>
	</ol><!--END .comment-list-->
<?php } ?>

<!--BEGIN .pings-list-->
<?php if ( ! empty( $comments_by_type ['pings'] ) ) { ?>
	<?php framework_discussion_title( 'pings' ); ?>
	<ol class="pings-list">
		<?php wp_list_comments(array(
		'type'         => 'pings',
		'callback'     => 'framework_pings_callback',
		'end-callback' => 'framework_pings_endcallback' )); ?>
	</ol><!--END .pings-list-->
<?php } ?>

</div><!--END #comments-->
<?php endif; // ( have_comments() ) ?>

<?php if ( comments_open() ) : // show comment form ?>
<!--BEGIN #respond-->
<?php comment_form ( array(
	'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="66" rows="5" aria-required="true"></textarea></p>',
	'comment_notes_before' => '',
	'comment_notes_after'  => '',
	'title_reply'          => __( 'Leave a Reply', 'redline' ),
	'title_reply_to'       => __( 'Leave a Reply to %s', 'redline' ),
	'cancel_reply_link'    => __( 'Cancel reply', 'redline' ),
	'label_submit'         => __( 'Post Comment', 'redline' )
) ); ?>

<?php else : // if comments are closed ?>
	<?php if ( !is_page() ) : // and is not a page ?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'redline' ); ?></p>
	<?php endif; ?>
		
<?php endif; // ( comments_open() ) ?>
