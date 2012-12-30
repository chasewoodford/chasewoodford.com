<?php

//	require_once( 'external/starkers-utilities.php' );
//
//	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );
//
//	function starkers_script_enqueuer() {
//		wp_register_style( 'screen', '../../../../../css/compiled/style.css', '', '', 'screen' );
//        wp_enqueue_style( 'screen' );
//	}

    // Custom read more link after excerpt
    function new_excerpt_more($more) {
        global $post;
        return '... <br/><a class="no-shadow continue-reading inline" href="'. get_permalink($post->ID) . '" title="View full post">continue reading &#187;</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');