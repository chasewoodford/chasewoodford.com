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
                            <a class="no-shadow" title="View portfolio" href="#">portfolio</a><span style="font-size:12px">&nbsp;/&nbsp;</span><a class="no-shadow" title="Download resume" href="#">resume</a>
                        </span>
                    </h3>
                </header>
                <section class="content">
                    <p>
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
                </section>
                <span class="stumblr-other-right">
                    Link to social media
                </span>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>

<?php
include ("../blog/wp-content/themes/stumblr/footer.php");
?>