<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">

    <title>Chase Woodford &#124; Resume</title>

    <link rel="shortcut icon" type="image/x-icon" href="http://www.chasewoodford.com/favicon.ico">

    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="about">
<div class="wrapper">
    <div class="content-wrapper">
        <?php
        include ('../header.php');
        ?>
        <div class="grid-8 main-content" role="main">
            <?php
            require('../blog/wp-blog-header.php');
            ?>
            <article class="grid-8">
                <header>
                    <h3 class="page-title-bar">
                        <div class="page-title">oh hai</div>
                        <div class="page-links">
                            <a title="view portfolio" href="/work"><i class="icon-book" aria-hidde="true"></i><span>portfolio</span></a>
                            <span class="divider">/</span>
                            <a title="download resume" href="#"><i class="icon-doc" aria-hidden="true"></i><span>resume</span></a>
                        </div>
                    </h3>
                </header>
                <section>
                    <div class="image-main">
                        <img src="/images/chase.png" alt="Chase sitting at his computer">
                    </div>
                    <p class="lead-font">
                        I'm Chase, a web designer/developer living in the suburbs of Philadelphia, PA, USA.
                    </p>
                    <p>
                        I work at <a href="http://www.verilogue.com" title="verilogue.com" target="_blank">Verilogue<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>, a medical marketing research company, as part of a three man rock star development team. We build web sites and applications that bring the healthcare industry together to share information and enhance disease understanding, like <a href="http://www.carecoach.com" title="carecoach.com" target="_blank">CareCoach.com<sup><i class="icon-popup"></i></sup></a>, which provides patients and caregivers tools to improve communications with healthcare providers.
                    </p>
                    <p>
                        I enjoy writing about web design, and throughout this site share my experience as a developer working for a small business at the intersection of Big Data and Big Pharma.
                    </p>
                    <p>
                        In my spare time I like to compose music, which I link to from the <a href="/playground" title="playground" target="_self">playground</a> along with all of my other side projects. I also spend a lot of time reading, mostly about web design and user experience with the occasional book on string theory or building time machines.
                    </p>
                    <br/>
                    <p class="lead">
                        { recently consumed }
                    </p>
                    <p>
                        I'm a pop culture junkie that loves to write about all the cool stuff I find. Here's what I've gotten into most recently:
                    </p>
                    <div class="recently-consumed-container">
                        <?php query_posts( 'cat=51&posts_per_page=2&orderby=post_date&order=DESC' );
                        while (have_posts()) : the_post();
                            ?>
                            <?php the_excerpt(); ?>
                        <?php endwhile; ?>
                    </div>
                    <br/>
                    <p class="lead">
                        { way back when }
                    </p>
                    <p>
                        I graduated from Temple University in 2007 with Summa Cum Laude honors, a bachelor's degree in Advertising and a minor in Sociology. I made the Dean's List a bunch of times, held several high ranking positions as a brother of the Alpha Tau Omega fraternity and was even robbed at gunpoint once. Pretty much your typical college experience.
                    </p>
                    <p>
                        But enough about me. To find out more, <a href="/contact" title="contact" target="_self">drop me a line</a> or say hi on <a href="https://twitter.com/chase1263070" title="twitter" target="_blank">Twitter<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>.
                    </p>
                    <br/>
                    <p class="lead">
                        { about this site }
                    </p>
                    <p>
                        This site is powered by <a href="http://wordpress.org/" target="_blank" title="WordPress">WordPress<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>, hand crafted using <a href="http://www.jetbrains.com/idea/" target="_blank" title="IntelliJ">IntelliJ<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>, and hosted by <a href="https://www.1and1.com/" target="_blank" title="1&1">1&1<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>. It features an adaptation of the <a href="http://viewportindustries.com/products/starkers/" target="_blank" title="Starkers">Starkers<sup><i class="icon-popup" aria-hidden="true"></i></sup></a> Wordpress theme, as well as the <a href="http://wordpress.org/extend/plugins/amazon-product-in-a-post-plugin/" target="_blank" title="Amazon Product In a Post">Amazon Product In a Post<sup><i class="icon-popup" aria-hidden="true"></i></sup></a> plugin for displaying products and the <a href="http://wordpress.org/extend/plugins/wordpress-seo/" target="_blank" title="WordPress SEO">WordPress SEO<sup><i class="icon-popup" aria-hidden="true"></i></sup></a> plugin. Code highlighting is brought to you by <a href="http://prismjs.com/" target="_blank" title="Prism.js">Prism<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>. Content delivery is optimized by the awesome folks at <a href="https://www.cloudflare.com/" target="_blank" title="CloudFlare">CloudFlare<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>. Nightly builds of the site are versioned and stored on <a href="https://github.com/" target="_blank" title="GitHub">GitHub<sup><i class="icon-popup" aria-hidden="true"></i></sup></a>.
                    </p>
                    <p>
                        Thank you to everyone in the web design/development community who made this site possible.
                    </p>

                </section>
                <div class="clear"></div>
            </article>
        </div>
    </div>
</div>
<?php
include ('../blog/wp-content/themes/v2/footer.php');
?>