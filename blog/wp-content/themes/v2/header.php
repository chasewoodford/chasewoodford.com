<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Chase Woodford">

    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="/css/compiled/style.css">

    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
<div class="wrapper">
    <div id="header" role="banner">
        <div class="grid-8 header-inner">
            <div class="links" role="navigation">
                <a class="header-link" href="/" title="home" tabindex="6">home</a><span class="bullet">&bull;</span>
                <a class="header-link" href="/resume" tabindex="7">resume</a><span class="bullet">&bull;</span>
                <a class="header-link" href="/contact" title="contact" tabindex="8">contact</a>
            </div>
            <!--<img class="logo pulse" src="/images/logo.png" alt="Chase Woodford &#124; Designer &amp; Developer"/>-->
            <aside class="right search-box" role="search">
                <form class="quick-search" action="/search-results/">
                    <input type="text" name="q" class="search-box-input" tabindex="4"/>
                    <button class="btn search-box-btn" tabindex="5">
                        <i class="icon-search-1">
                            <span class="hide-text">Search</span>
                        </i>
                    </button>
                </form>
            </aside>
            <nav class="nav-primary" role="navigation">
                <a class="nav-link no-decoration about" href="/about" title="about" tabindex="1"><span class="h2">about</span></a>
                <a class="nav-link no-decoration work" href="/work" title="work" tabindex="2"><span class="h2">work</span></a>
                <a class="nav-link no-decoration blog" href="/blog" title="blog" tabindex="3"><span class="h2">blog</span></a>
            </nav>
        </div>
    </div>