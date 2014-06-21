<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">

    <title>Chase Woodford &#124; Portfolio</title>

    <link rel="shortcut icon" type="image/x-icon" href="http://www.chasewoodford.com/favicon.ico">

    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="work">
<div class="wrapper">
    <div class="content-wrapper">
        <?php
        include ('../../header.php');
        ?>
        <div class="grid-8 main-content" role="main">
            <?php
            require('../../blog/wp-blog-header.php');
            ?>
            <article>
                <header>
                    <h3>
                    <span class="portfolio-category">
                        portfolio > digital
                    </span>
                    <a class="title-bar" href="http://www.garyames.net" title="see it live" target="_blank">garyames.net</a>
                    </h3>
                </header>
                <section>
                    <div class="grid-8 clearfix image-main text-left">
                        <a class="left screenshot" href="http://www.garyames.net" title="see it live" target="_blank">
                            <img class="main" src="/images/screenshot-garyAmes.gif" alt="garyames.net">
                        </a>
                        <ul class="text-left table">
                            <li class="table-row">
                                <div class="table-title">Client:</div>
                                <div class="table-data">Gary Ames</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Title:</div>
                                <div class="table-data">garyames.net</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Date:</div>
                                <div class="table-data">April 2013</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Type:</div>
                                <div class="table-data">Website</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Tags:</div>
                                <div class="table-data">HTML5, CSS3, Responsive Web Design, WordPress, Web Hosting</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title"></div>
                                <div class="table-data">
                                    <a href="http://www.garyames.net" title="see it live" target="_blank"><i class="icon-globe" aria-hidde="true"></i>&nbsp;<span>see it live&raquo;</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <p class="lead">
                        { overview }
                    </p>
                    <p>
                        Gary Ames is currently Executive Director of Behavior Analysis & Therapy, a psychological consulting firm in Bala Cynwyd, PA, USA, but in the past 30 years he has done everything from teaching to executive coaching. He has accumulated a lot of knowledge in that time. Though he no longer practices executive coaching as a profession, he does like sharing his previously acquired knowledge with acquaintances, and does this by directing them to his personal website.
                    </p>
                    <p>
                        Gary contacted me when he learned that his personal website, in addition to several other web properties he owned, no longer functioned as originally designed.
                    </p>
                    <p>
                        The original goal of this project was to get his personal website working again, which was affected by technical issues like broken links and unreachable databases, refresh some of the site's content, which had grown outdated, and give the site's design an update while maintaining the familiarity of the layout and navigation.
                    </p>
                    <p>
                        Additionally, Gary desired a simplified, consolidated domain management experience. So, along with getting his personal site working again and giving it a facelift, we decided to transfer all of his domain registrations and hosting services to one provider and move the site's content from a propriety content management system to the more easily maintained and user-friendly WordPress.
                    </p>
                    <p>
                        The project, originally estimated to take three or four months to complete, took nearly double that. But in the end&mdash;after re-creating a corrupted database, nearly losing several domains due to registration expiration, battling with hosting companies over lost login credentials and numerous other minor obstacles&mdash;the site was re-born with a refreshed look and, most importantly, updated and accessible content.
                    </p>
                    <br/>
                    <p class="lead">
                        { content strategy }
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-garyAmesNet-001.png" alt="Responsive design highlight"/>
                        Gary's personal site has and continues to be structured in the form of a book. Each chapter focuses on one part of executing a successful job search and contains several lessons, or posts, with each lesson building on top of the knowledge gained from prior lessons.
                    </p>
                    <p>
                        The previous site design made it easy to jump from one piece of content to the next with its ever-present menu navigation, however, it did not convey to the user this idea of a structured progression well.
                    </p>
                    <p>
                        In the re-design we made several enhancements to the site to help guide the user through the site's ideal flow. We gave the site's menu navigation chapter numbers, an idea re-enforced by large headers found on every page; we made the initial landing page for the site Chapter One's index page, as opposed to the About page; and we added smart buttons to the bottom of each post to guide the user on to the next lesson.
                    </p>
                    <br/>
                    <p class="lead">
                        { navigation menu }
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-garyAmesNet-002.png" alt="Menu highlight"/>
                        The menu navigation boldly displays each chapter's name and on hover reveals the chapter's number with a smooth <code class=" language-css">transition</code> created by a combination of <code class=" language-css">border</code> and <code class=" language-css">:before</code> pseudo-element manipulation. The About and Contact list elements feature scalable vector icons from the Font Awesome toolkit. The menu is positioned to always be visible on the top-left corner of the screen for devices with larger displays and designed to be accessible only when needed on smaller screen displays, to help maintain the site's content hierarchy across all devices.
                    </p>
                    <br/>
                    <p class="lead">
                        { chapter numbers }
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-garyAmesNet-003.png" alt="Chapter header highlight"/>
                        On every page the first text seen is the chapter number. It, too, is bold in display, and uses a couple dozen layers of <code class=" language-css">text-shadow</code> to achieve the 3-D look.
                    </p>
                    <p>
                        In WordPress, the chapter number is maintained through a custom field specified for each post. For the category pages, because each chapter will contain only posts associated with one chapter, to get the chapter number to display on the top of the page we wrote a simple query that finds the first post's custom field (the chapter number) and injects it into the top of the page. In addition to this query, there was a bunch of other logic required to make sure that category descriptions, post descriptions and all the other metadata displayed correctly, making this page's code quite interesting&mdash;<a href="https://github.com/chasewoodford/garyames.net/blob/master/wp-content/themes/starkers-master/category.php" target="_blank">see more on GitHub<sup><i aria-hidden="true" class="icon-popup"></i></sup></a>.
                    </p>
                    <br/>
                    <p>
                        To learn more about how this site was designed and developed, <a href="/contact">contact me</a>.
                    </p>
                </section>
                <div class="clearfix"></div>
            </article>
            <?php
            include ('../portfolio-previews.php');
            ?>
        </div>
    </div>
</div>
<?php
include ('../../blog/wp-content/themes/v2/footer.php');
?>