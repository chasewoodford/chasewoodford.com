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
                        "You don't speak because of Friedrich Nietzsche?"
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
                        <li>Link to social media?</li>
                    </ul>
                </section>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>

<?php
include ("../blog/wp-content/themes/stumblr/footer.php");
?>