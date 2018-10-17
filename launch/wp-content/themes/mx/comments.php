<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to mx_comment() which is
 * located in the inc/mx-functions.php file.
 *
 * @since MX 1.0
 */
if(is_single() && get_post_type(get_the_ID()) == 'portfolio' && !comments_open()){
	// portfolio single page comment didn't open then don't show any content
}else{
?>
<div id="comments">
<?php if ( have_comments() ) { ?>
	<div class="mx-title">
        <h4 class="post-title"><?php comments_number(__('No Comment','MX'), __('1 Response Comment','MX'),__('% Response Comments','MX')); ?></h4>
        <div class="line"></div><div class="clear"></div>
    </div>
    <ul class="comment-list">
        <?php
            /* Loop through and list the comments. Tell wp_list_comments()
             * to use twentyeleven_comment() to format the comments.
             * If you want to overload this in a child theme then you can
             * define mx_comment() and that will be used instead.
             * See mx_comment() inc/mx-functions.php for more.
             */
            wp_list_comments('type=comment&avatar_size=50&callback=mx_comment'); 
        ?>
    </ul>
	<?php 
	// are there comments to navigate through
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {  ?>
	<nav id="comment-nav-above">
		<div class="next-post"><?php next_comments_link( __( 'Newer Comments &rarr;', 'MX' ) ); ?></div>
		<div class="pre-post"><?php previous_comments_link( __( '&larr; Older Comments', 'MX' ) ); ?></div>
	</nav>
	<?php } ?>
<?php
/* If there are no comments and comments are closed, let's leave a little note, shall we?
 * But we don't want the note on pages or post types that do not support comments.
 */
}elseif ( ! comments_open()) {
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'MX' ); ?></p>
<?php } ?>
	<?php mx_comment_form();?>
</div>
<?php } ?>
