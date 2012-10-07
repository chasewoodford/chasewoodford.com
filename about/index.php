<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="about">
<div class="wrapper">
    <div class="main-content">
        <?php
        include ("../header.php");
        ?>

        <div class="grid-8">
            <?php
            require('../blog/wp-blog-header.php');
            ?>

            <article class="grid-8 hero post type-post">
                <header>
                    <h3 class="title-background post-title">
                        about
                        <span class="blog-category" style="">
                            <a class="no-shadow" title="view portfolio" href="../work"><i class="icon-picture"></i><span style="margin-left:4px">portfolio</span></a><span style="font-size:12px; padding: 0 10px;">&nbsp;/&nbsp;</span><a class="no-shadow" title="download resume" href="#"><i class="icon-doc"></i><span style="margin-left:4px">resume</span></a>
                        </span>
                    </h3>
                </header>
                <section class="content center">
                    <div class="preview main">
                        <img src="http://placehold.it/400x200">
                    </div>
                    <p class="left">
                        Hi, my name's Chase Woodford. I'm a web designer/developer living and working out of the suburbs of Philadelphia, PA, USA.
                    </p>
                    <p>
                        A list of things that go here:
                    </p>
                    <ul>
                        <li>Experience</li>
                        <li>Education</li>
                        <li>Currently reading</li>
                        <li>Link to contact</li>
                        <li>Link portfolio/work</li>
                    </ul>
                    <div class="stumblr-meta">
                        <p class="stumblr-other-right">
                            <span style="margin:0 6px; font-size: 11px;"><a class="no-shadow" href="#"><i class="icon-twitter-bird"></i></a></span>
                            <span style="margin:0 6px; font-size: 11px;"><a class="no-shadow" href="#"><i class="icon-linkedin"></i></a></span>
                            <span style="margin:0 6px; font-size: 11px;"><a class="no-shadow" href="#"><i class="icon-lastfm"></i></a></span>
                            <span style="margin:0 6px; font-size: 11px;"><a class="no-shadow" href="#"><i class="icon-github-text"></i></a></span>
                            <span style="margin:0 6px; font-size: 11px;"><a class="no-shadow" href="#"><i class="icon-skype"></i></a></span>
                        </p>
                    </div>
                </section>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>

<?php
include ("../blog/wp-content/themes/stumblr/footer.php");
?>