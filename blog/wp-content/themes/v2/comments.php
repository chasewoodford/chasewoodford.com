<?php if ( have_comments() ) : ?>

<div style="overflow:hidden;">

    <p class="comments">
      <strong><em>COMMENTS:</em></strong>
    </p>

    <ol class="comments">
        <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
        <?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
        <div class="comment-author vcard">
            <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
        <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
            <?php
            /* translators: 1: date, 2: time */
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'&nbsp;&nbsp;','' );
            ?>
        </div>

        <?php comment_text() ?>

        <div class="reply">
            <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
        <?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
    </ol>
	
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