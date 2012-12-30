<?php

	require_once( 'external/starkers-utilities.php' );

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	function starkers_script_enqueuer() {
		wp_register_style( 'screen', 'http://www.chasewoodford.com/css/compiled/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}