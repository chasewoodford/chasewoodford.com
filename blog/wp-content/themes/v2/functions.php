<?php

    // Custom read more link after excerpt
    function new_excerpt_more($more) {
        global $post;
        return '... <br/><a class="no-shadow continue-reading inline" href="'. get_permalink($post->ID) . '" title="View full post">continue reading &#187;</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');