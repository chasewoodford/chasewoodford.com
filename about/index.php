<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; About</title>
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="about">
<div class="wrapper">
    <div class="main-content">
        <?php
        include ('../header.php');
        ?>
        <div class="grid-8" style="padding-top:140px;">
            <?php
            require('../blog/wp-blog-header.php');
            ?>
            <article class="grid-8 hero post type-post">
                <header>
                    <h3 class="title-background post-title">
                        <div class="left">oh hai</div>
                        <div class="right blog-category">
                            <a title="view portfolio" href="/work"><i class="icon-picture"></i><span style="margin-left:6px">portfolio</span></a><span style="font-size:12px; padding: 0 10px;">&nbsp;/&nbsp;</span><a title="download resume" href="#"><i class="icon-doc"></i><span style="margin-left:4px">resume</span></a>
                        </div>
                    </h3>
                </header>
                <section class="content center">
                    <div class="static main">
                        <img src="/images/chase.png" alt="Chase sitting at his computer">
                    </div>
                    <p class="left lead">
                        I'm Chase, a web designer/developer living in the suburbs of Philadelphia, PA, USA.
                    </p>
                    <p class="left">
                        I work at <a class="inline" href="http://www.verilogue.com" title="verilogue.com" target="_blank">Verilogue<sup><i class="icon-popup"></i></sup></a>, a medical marketing research company, as part of a three man rock star development team. We build web sites and applications that bring the healthcare industry together to share information and enhance disease understanding, like <a class="inline" href="http://www.carecoach.com" title="carecoach.com" target="_blank">CareCoach.com<sup><i class="icon-popup"></i></sup></a>, which provides patients and caregivers tools to improve communications with healthcare providers.
                    </p>
                    <p class="left">
                        I enjoy writing about web design, and throughout this site share my experience as a developer working for a small business at the intersection of Big Data and Big Pharma.
                    </p>
                    <p class="left">
                        In my spare time I like to compose music, which I link to from the <a class="inline" href="/playground" title="playground" target="_self">playground</a> along with all of my other side projects. I also spend a lot of time reading, mostly about web design and user experience with the occasional book on string theory or building time machines, you know, just to keep in the know.
                    </p>
                    <p class="left lead">
                        { recently consumed }
                    </p>
                    <p class="left">
                        <?php query_posts( 'cat=51&posts_per_page=2&orderby=post_date&order=DESC' );
                        while (have_posts()) : the_post();
                        ?>
                        <?php the_excerpt(); ?>
                        <?php endwhile; ?>
                    </p>
                    <p class="left lead">
                        { way back when }
                    </p>
                    <p class="left">
                        I graduated from Temple University in 2007 with Summa Cum Laude honors, a bachelor's degree in Advertising and a minor in Sociology. I made the Dean's List a bunch of times, held several high ranking positions as a brother of the Alpha Tau Omega fraternity and was even robbed at gunpoint once. Pretty much your typical college experience.
                    </p>
                    <p class="left">
                        But enough about me. If you want to know anything else, <a class="inline" href="/contact" title="contact" target="_self">drop me a line</a> or say hi on <a class="inline" href="https://twitter.com/chase1263070" title="twitter" target="_blank">Twitter<sup><i class="icon-popup"></i></sup></a>.
                    </p>
                    <?php
                    include ('../social.php');
                    ?>
                </section>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>
<?php
include ('../blog/wp-content/themes/v2/footer.php');
?>