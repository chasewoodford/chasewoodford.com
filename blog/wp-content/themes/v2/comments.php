<div id="comments">
    <?php // Run some checks for bots and password protected posts
    $req = get_option('require_name_email'); // Checks if fields are required.
    if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
        die ( 'Please do not load this page directly. Thanks!' );
    if ( ! empty($post->post_password) ) :
    if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
    ?>
    <div class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'your-theme') ?></div>
</div>
<?php
return;
    endif;
endif;
?>

<?php if ( have_comments() ) : ?>

    <?php if ( ! empty($comments_by_type['comment']) ) : ?>

        <div id="comments-list" class="comments">

            <ol>
                <?php wp_list_comments('type=comment&callback=custom_comments'); ?>
            </ol>

        </div>

<?php endif ?>

<?php if ( 'open' == $post->comment_status ) : ?>
    <div id="respond">
        <h3><?php comment_form_title( __('Post a Comment', 'your-theme'), __('Post a Reply to %s', 'your-theme') ); ?></h3>

        <div id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></div>

        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
            <p id="login-req"><?php printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'your-theme'),
                    get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>

        <?php else : ?>
            <div class="formcontainer">


                <form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

                    <?php if ( $user_ID ) : ?>
                        <p id="login"><?php printf(__('<span class="loggedin">Logged in as <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'your-theme'),
                                get_option('siteurl') . '/wp-admin/profile.php',
                                wp_specialchars($user_identity, true),
                                wp_logout_url(get_permalink()) ) ?></p>

                    <?php else : ?>

                        <p id="comment-notes"><?php _e('Your email is <em>never</em> published nor shared.', 'your-theme') ?> <?php if ($req) _e('Required fields are marked <span class="required">*</span>', 'your-theme') ?></p>

                        <div id="form-section-author" class="form-section">
                            <div class="form-label"><label for="author"><?php _e('Name', 'your-theme') ?></label> <?php if ($req) _e('<span class="required">*</span>', 'your-theme') ?></div>
                            <div class="form-input"><input id="author" name="author" type="text" value="<?php echo $comment_author ?>" size="30" maxlength="20" tabindex="3" /></div>
                        </div>

                        <div id="form-section-email" class="form-section">
                            <div class="form-label"><label for="email"><?php _e('Email', 'your-theme') ?></label> <?php if ($req) _e('<span class="required">*</span>', 'your-theme') ?></div>
                            <div class="form-input"><input id="email" name="email" type="text" value="<?php echo $comment_author_email ?>" size="30" maxlength="50" tabindex="4" /></div>
                        </div>

                        <div id="form-section-url" class="form-section">
                            <div class="form-label"><label for="url"><?php _e('Website', 'your-theme') ?></label></div>
                            <div class="form-input"><input id="url" name="url" type="text" value="<?php echo $comment_author_url ?>" size="30" maxlength="50" tabindex="5" /></div>
                        </div>

                    <?php endif ?>

                    <div id="form-section-comment" class="form-section">
                        <div class="form-label"><label for="comment"><?php _e('Comment', 'your-theme') ?></label></div>
                        <div class="form-textarea"><textarea id="comment" name="comment" cols="45" rows="8" tabindex="6"></textarea></div>
                    </div>

                    <div id="form-allowed-tags" class="form-section">
                        <p><span><?php _e('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'your-theme') ?></span> <code><?php echo allowed_tags(); ?></code></p>
                    </div>

                    <?php do_action('comment_form', $post->ID); ?>

                    <div class="form-submit"><input id="submit" name="submit" type="submit" value="<?php _e('Post Comment', 'your-theme') ?>" tabindex="7" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></div>

                    <?php comment_id_fields(); ?>

                </form>
            </div>
        <?php endif ?>
    </div>
<?php endif ?>
<?php endif ?>