<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments</p>
</div>

	<?php
			// stop the rest of comments.php from being processed
			return;
		endif;
	?>

	<?php ?>

	<?php if ( have_comments() ) : ?>

	<ol>
		<?php wp_list_comments(); ?>
	</ol>

	<?php
        // no comments and comments are closed, leave a note
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<p>Comments are closed</p>
	
	<?php endif; ?>

	<?php comment_form(); ?>

</div>
