<?php

    // clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    //setup footer widget area
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Side Widgets',
            'id'   => 'v2_widgets',
            'description'   => 'Side Widget Area',
            'before_widget' => '<div id="%1$s" class="side-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }

    // pagination
    function v2_pagination($pages = '', $range = 2) {
        $showitems = ($range * 2)+1;

        global $paged;
        if(empty($paged)) $paged = 1;

        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }

        if(1 != $pages)
        {
            echo "<div class='pagination pagination-centered'><ul>";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
            if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<li class='active'><a href='#top' title='back to top'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
                }
            }

            if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
            echo "</ul></div>\n";
        }
    }

    // Custom read more link after excerpt
    function new_excerpt_more($more) {
        global $post;
        return '... <br/><a class="continue-reading" href="'. get_permalink($post->ID) . '" title="View full post">continue reading &#187;</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    // Custom callback to list comments
    function custom_comments($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        $GLOBALS['comment_depth'] = $depth;
        ?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <div class="comment-meta"><a href="%3$s" title="Permalink to this comment"><i class="icon-comment" aria-hidden="true"></i></a><?php commenter_link() ?><?php printf(__('&nbsp;posted a comment on %1$s', 'your-theme'),
                get_comment_date('F j, Y'),
                get_comment_time(),
                '#comment-' . get_comment_ID() );
            edit_comment_link(__('Edit', 'your-theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
        <div class="comment-author vcard"></div>
        <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'your-theme') ?>
        <div class="comment-content">
            <?php comment_text() ?>
        </div>
        <?php // echo the comment reply link
        if($args['type'] == 'all' || get_comment_type() == 'comment') :
            comment_reply_link(array_merge($args, array(
                'reply_text' => __('Reply','your-theme'),
                'login_text' => __('Log in to reply.','your-theme'),
                'depth' => $depth,
                'before' => '<div class="comment-reply-link">',
                'after' => '</div>'
            )));
        endif;
        ?>
    <?php }

    // Produces an avatar image with the hCard-compliant photo class
    function commenter_link() {
        $commenter = get_comment_author_link();
        if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
            $commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
        } else {
            $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
        }
        $avatar_email = get_comment_author_email();
        $avatar = str_replace( "class='avatar", "class='left photo avatar", get_avatar( $avatar_email, 80 ) );
        echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
    }