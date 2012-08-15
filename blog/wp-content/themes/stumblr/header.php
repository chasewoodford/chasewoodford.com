<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('sitename'); ?> <?php wp_title(); ?></title>

<?php  $options = get_option('plugin_options'); ?>

    <link rel="stylesheet" href="/css/compiled/home.css"/>

    
<!-- wp head -->
<?php wp_head(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>


<body <?php body_class(); ?>>
	
<div id="wrap">
	<div id="stumblr-sidebar">
        
        
<?php if ( is_active_sidebar( 'stumblr_widgets')) { ?>     
<div id="sidebar-widget-area">
<?php dynamic_sidebar( 'stumblr_widgets' ); ?>
</div>
<?php }  ?>     
</div><!-- // stumblr-sidebar -->           

