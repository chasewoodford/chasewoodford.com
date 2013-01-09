<?php /* The Comments Template — with, er, comments! */ ?>
<div id="comments">
    <?php /* Run some checks for bots and password protected posts */ ?>
    <?php
    $req = get_option('require_name_email'); // Checks if fields are required.
    if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
        die ( 'Please do not load this page directly. Thanks!' );
    if ( ! empty($post->post_password) ) :
    if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
    ?>
    <div class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'your-theme') ?></div>
</div><!-- .comments -->
<?php
return;
    endif;
endif;
?>

<?php /* See IF there are comments and do the comments stuff! */ ?>
<?php if ( have_comments() ) : ?>

    <?php /* Count the number of comments and trackbacks (or pings) */
    $ping_count = $comment_count = 0;
    foreach ( $comments as $comment )
        get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;
    ?>

    <?php /* IF there are comments, show the comments */ ?>
    <?php if ( ! empty($comments_by_type['comment']) ) : ?>

        <div id="comments-list" class="comments">
            <p class="lead-font"><?php printf($comment_count > 1 ? __('{ comments }', 'your-theme') : __('{ comment }', 'your-theme'), $comment_count) ?></p>

            <ol class="comment-list">
                <?php wp_list_comments('type=comment&callback=custom_comments'); ?>
            </ol>

        </div><!-- #comments-list .comments -->

    <?php endif; /* if ( $comment_count ) */ ?>

<?php endif /* if ( $comments ) */ ?>

<?php /* If comments are open, build the respond form */ ?>
<?php if ( 'open' == $post->comment_status ) : ?>
    <div id="respond">
        <p class="lead-font"><?php comment_form_title( __('{ post a comment }', 'your-theme'), __('{ reply to %s }', 'your-theme') ); ?></p>

        <div id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></div>

        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
            <p id="login-req"><?php printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'your-theme'),
                    get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>

        <?php else : ?>
            <div class="formcontainer well">


                <form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

                    <?php if ( $user_ID ) : ?>
                        <p id="login"><?php printf(__('<span class="loggedin">Logged in as <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'your-theme'),
                                get_option('siteurl') . '/wp-admin/profile.php',
                                wp_specialchars($user_identity, true),
                                wp_logout_url(get_permalink()) ) ?></p>

                    <?php else : ?>

                        <p id="comment-notes"><?php if ($req) _e('Required fields are marked <span class="required">*</span>', 'your-theme') ?></p>

                        <div id="form-section-author" class="form-section">
                            <div style="display:inline;float:left; width:18%" class="form-label"><label for="author"><?php _e('Name', 'your-theme') ?></label> <?php if ($req) _e('<span class="required">*</span>', 'your-theme') ?></div>
                            <div style="display:inline;float:left; width:80%" class="form-input"><input id="author" name="author" type="text" value="<?php echo $comment_author ?>" size="30" maxlength="20" tabindex="3" /></div>
                        </div><!-- #form-section-author .form-section -->

                        <div id="form-section-email" class="form-section">
                            <div style="display:inline;float:left; width:18%" class="form-label"><label for="email"><?php _e('Email', 'your-theme') ?></label> <?php if ($req) _e('<span class="required">*</span>', 'your-theme') ?></div>
                            <div style="display:inline;float:left; width:80%" class="form-input"><input id="email" name="email" type="text" value="<?php echo $comment_author_email ?>" size="30" maxlength="50" tabindex="4" /></div>
                        </div><!-- #form-section-email .form-section -->

                        <div id="form-section-url" class="form-section">
                            <div style="display:inline;float:left; width:18%" class="form-label"><label for="url"><?php _e('Website', 'your-theme') ?></label></div>
                            <div style="display:inline;float:left; width:80%" class="form-input"><input id="url" name="url" type="text" value="<?php echo $comment_author_url ?>" size="30" maxlength="50" tabindex="5" /></div>
                        </div><!-- #form-section-url .form-section -->

                    <?php endif /* if ( $user_ID ) */ ?>

                    <div id="form-section-comment" class="form-section">
                        <div style="display:inline;float:left; width:18%" class="form-label"><label for="comment"><?php _e('Comment', 'your-theme') ?></label></div>
                        <div style="display:inline;float:left; width:80%" class="form-textarea"><textarea id="comment" name="comment" cols="45" rows="8" tabindex="6"></textarea></div>
                    </div><!-- #form-section-comment .form-section -->

                    <div id="form-allowed-tags" class="form-section allowed-tags">
                        <p><span><?php _e('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'your-theme') ?></span> <code><?php echo allowed_tags(); ?></code></p>
                    </div>

                    <?php do_action('comment_form', $post->ID); ?>

                    <div class="form-submit"><input id="submit" class="right btn btn-large btn-primary" name="submit" type="submit" value="<?php _e('Post Comment', 'your-theme') ?>" tabindex="7" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></div>

                    <?php comment_id_fields(); ?>

                    <?php /* Just … end everything. We're done here. Close it up. */ ?>

                </form><!-- #commentform -->
            </div><!-- .formcontainer -->
        <?php endif /* if ( get_option('comment_registration') && !$user_ID ) */ ?>
    </div><!-- #respond -->
<?php endif /* if ( 'open' == $post->comment_status ) */ ?>
</div><!-- #comments -->