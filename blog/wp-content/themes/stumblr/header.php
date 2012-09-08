<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer<?php bloginfo('sitename'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/compiled/style.css">

    <!-- wp head -->
    <?php wp_head(); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
<body id="top" <?php body_class(); ?>>
<div id="wrap grid-10">
	<div id="sidebar">
        <?php if ( is_active_sidebar( 'stumblr_widgets')) { ?>
            <div id="sidebar-widget-area">
                <?php dynamic_sidebar( 'stumblr_widgets' ); ?>
            </div>
        <?php }  ?>
    </div><!-- // stumblr-sidebar -->

