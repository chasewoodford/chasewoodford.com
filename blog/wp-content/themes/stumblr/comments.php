<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
  <div class="comments-area"> 
	<h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
   
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
	<?php endif; ?>
	
<?php endif; ?>


<?php if ( comments_open() ) : ?>



<div>

	<p class="comments">
        <strong><em>COMMENTS:</em></strong>
    </p>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

<!--	--><?php //if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<!--		<p>You must be <a href="--><?php //echo wp_login_url( get_permalink() ); ?><!--">logged in</a> to post a comment.</p>-->
<!--	--><?php //else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php else : ?>

        <fieldset class="info_fieldset">
            <div id="fields">
                <div style="display:inline;float:left; width:18%">
                    <label for="author">Name</label>
                </div>
                <div style="display:inline;float:left; width:80%">
                    <input type="text" name="author" id="author" value="" class="textbox" aria-required="true"/>
                </div>
                <div style="display:inline;float:left; width:18%">
                    <label for="email">Email</label>
                </div>
                <div style="display:inline;float:left; width:80%">
                    <input type="text" name="email" id="email" value="" class="textbox" aria-required="true"/>
                </div>

                <?php endif; ?>

                <div style="display:inline;float:left; width:18%">
                    <label for="comment">Comment</label>
                </div>
                <div style="display:inline;float:left; width:80%">
                    <textarea spellcheck="true" name="comment" id="comment" cols="50" rows="4" class="textbox textbox2"></textarea>
                </div>
                <div>
                    <input name="submit" type="submit" value="submit comment" class="formSend btn btn-large btn-primary">
                </div>
            </div>
        </fieldset>
	
	   <div class="clear"></div>

        <?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>

	</form>
 </div>

<!--	--><?php //endif; // If registration required and not logged in ?>
	

<?php endif; ?>
