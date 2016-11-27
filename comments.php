<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package  paipk1
 * @since paipk1 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div class="comment-post" id="SOHUCS">

<h4><span class="glyphicon glyphicon-share-alt"></span>&nbsp;<?php _e('Comment','paipk1') ?></h4>

<?php if ( !comments_open() ) :
// If registration required and not logged in.
	elseif ( get_option('comment_registration') && !is_user_logged_in() ) :
?>
<p><a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a> 才能发表评论.</p>
<?php else  : ?>
<!-- Comment Form -->
<form id="commentform" name="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="form-horizontal" role="form">
	<?php if ( !is_user_logged_in() ) : ?>
	<div class="form-group">
		<label for="author" class="col-sm-2 control-label"><?php _e('Observer','paipk1') ?>(*)</label>
		<div class="col-sm-10">
			<input type="text" name="author" id="author" placeholder="<?php _e('Your Name','paipk1') ?>" value="<?php echo $comment_author; ?>" tabindex="1" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email(*)</label>
		<div class="col-sm-10">
			<input type="email" name="email" id="email" placeholder="@" value="<?php echo $comment_author_email; ?>" tabindex="2" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="url" class="col-sm-2 control-label"><?php _e('Website','paipk1') ?></label>
		<div class="col-sm-10">
			<input type="text" name="url" id="url" placeholder="http://" value="<?php echo $comment_author_url; ?>" tabindex="3" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="comment" class="col-sm-2 control-label"><?php _e('Comment','paipk1') ?>(*)</label>
		<div class="col-sm-10">
			<textarea name="comment" id="message comment" rows="3" tabindex="5" class="form-control"></textarea>
		</div>
	</div>
	<?php else : ?>
	<h3><i class="glyphicon glyphicon-edit"></i>&nbsp;<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>的评论&nbsp;<small><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出登录"><i class="glyphicon glyphicon-log-out"></i>&nbsp;退出</a></small></h3>
	<?php endif; ?>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="sumbit" tabindex="7" onclick="Javascript:document.forms['commentform'].submit()"><?php _e('Submit Comments','paipk1') ?></button>
		</div>
	</div>	
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'i-max' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'i-max' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'i-max' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'i-max' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'i-max' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

</div><!-- #comments -->