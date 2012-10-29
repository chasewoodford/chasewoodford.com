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
                        hi
                        <span class="blog-category" style="">
                            <a class="no-shadow" title="view portfolio" href="../work"><i class="icon-picture"></i><span style="margin-left:4px">portfolio</span></a><span style="font-size:12px; padding: 0 10px;">&nbsp;/&nbsp;</span><a class="no-shadow" title="download resume" href="#"><i class="icon-doc"></i><span style="margin-left:4px">resume</span></a>
                        </span>
                    </h3>
                </header>
                <section class="content center">
                    <div class="static main">
                        <img src="../images/chase.png" alt="Chase sitting at his computer">
                    </div>
                    <p class="left">
                        I'm Chase, a web designer/developer living in the suburbs of Philadelphia, PA, USA. I work at <a class="inline" href="http://www.verilogue.com" title="verilogue.com" target="_blank">Verilogue<sup><i class="icon-popup"></i></sup></a>, a medical marketing research company, as part of a three man rock star development team. We build web sites and applications that bring the healthcare industry together to share information and enhance disease understanding, like <a class="inline" href="http://www.carecoach.com" title="carecoach.com" target="_blank">CareCoach.com<sup><i class="icon-popup"></i></sup></a>, which provides patients and caregivers tools to improve their communications with their healthcare providers.
                    </p>
                    <p class="left">
                        I enjoy writing about web design, and throughout this site share my experience as a developer working for a small business at the intersection of Big Data and Big Pharma. In my spare time I like to compose music, which I link to from the <a class="inline" href="/playground" title="playground" target="_self">playground</a> along with all of my other side projects.
                    </p>
                    <p class="left">
                        A list of things that go here:
                    </p>
                    <ul class="left">
                        <li>Experience</li>
                        <li>Education</li>
                        <li>Currently reading</li>
                            <ul>
                                <li>A list of books being read now</li>
                                <li>Recommendations</li>
                                <li>Looking forward to</li>
                            </ul>
                        <li>Link to contact</li>
                        <li>Link portfolio/work</li>
                        <li>Link to playground</li>
                    </ul>
                    <p class="left">
                        Other cool things can go here, but mostly this paragraph is here to test spacing.
                    </p>
                    <?php
                    include ("../social.php");
                    ?>
                </section>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>

<?php
include ("../blog/wp-content/themes/stumblr/footer.php");
?>