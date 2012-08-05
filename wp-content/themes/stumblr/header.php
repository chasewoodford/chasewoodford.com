<?php  $options = get_option('plugin_options');
    $stumblr_color_scheme = $options['stumblr_color_scheme'];
?>			

<div id="wrap">
	<div id="stumblr-sidebar">
        <?php if ( is_active_sidebar( 'stumblr_widgets')) { ?>
        <div id="sidebar-widget-area">
        <?php dynamic_sidebar( 'stumblr_widgets' ); ?>
        </div>
        <?php }  ?>
    </div><!-- // stumblr-sidebar -->

