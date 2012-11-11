<?php if ( have_comments() ) : ?>

<div style="overflow:hidden;">

    <p class="comments">
      <strong><em>COMMENTS:</em></strong>
    </p>

    <ul class="comments">
        <?php wp_list_comments('type=comment&avatar_size=64'); ?>
        <?php wp_list_comments(); ?>
    </ul>
	
<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<!--    <div class="cancel-comment-reply">-->
<!--        --><?php //cancel_comment_reply_link(); ?>
<!--    </div>-->

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

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
                <div style="display:inline;float:left; width:18%">
                    <label for="website">Website</label>
                </div>
                <div style="display:inline;float:left; width:80%">
                    <input type="text" name="website" id="website" value="" class="textbox" aria-required="false"/>
                </div>
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

        <?php comment_id_fields(); ?>
        <?php do_action('comment_form', $post->ID); ?>

    </form>

<?php endif; ?>