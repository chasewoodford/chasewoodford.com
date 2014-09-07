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
                    <a class="title-bar" href="http://www.alertfocus.com" title="see it live" target="_blank">alertfocus.com</a>
                    </h3>
                </header>
                <section>
                    <div class="grid-8 clearfix image-main text-left">
                        <a class="left screenshot" href="http://www.alertfocus.com" title="see it live" target="_blank">
                            <img class="main" src="/images/screenshot-alertFocus.gif" alt="alertfocus.com">
                        </a>
                        <ul class="text-left table">
                            <li class="table-row">
                                <div class="table-title">Client:</div>
                                <div class="table-data">Gary Ames</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Title:</div>
                                <div class="table-data">alertfocus.com</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Date:</div>
                                <div class="table-data">July 2013</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Type:</div>
                                <div class="table-data">Website</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Tags:</div>
                                <div class="table-data"></div>
                            </li>
                            <li class="table-row">
                                <div class="table-title"></div>
                                <div class="table-data">
                                    <a href="http://www.alertfocus.com" title="see it live" target="_blank"><i class="icon-globe" aria-hidde="true"></i>&nbsp;<span>see it live&raquo;</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <p class="lead">
                        { overview }
                    </p>
                    <p>
                        After finishing a re-design on <a href="http://chasewoodford.com/work/digital/gary-ames.php" title="garyames.net">his personal site</a>, Gary Ames wanted to update his other web properties that promote his work as licensed psychologist and <a href="http://en.wikipedia.org/wiki/Biofeedback" target="_blank">biofeedback<sup><i aria-hidden="true" class="icon-popup"></i></sup></a> consultant. The primary entry point for these properties is <a href="http://www.alertfocus.com" title="see it live">alertfocus.com</a>.
                    </p>
                    <p>
                        The site is loaded with information, mostly in the form of articles and presentations describing the benefits of biofeedback, with the goal of converting site visits into inqueries for more details on Gary's services. The older version of the site functioned, but lacked visual appeal and was not optimized for conversion.
                    </p>
                    <p>
                        Gary asked me to help him re-design alertfocus.com in a way that was more "enticing" to visitors&mdash;he wanted more visuals, a non-linear flow but one with less cognitive overhead, better SEO and, of course, a higher conversion rate.
                    </p>
                    <br/>
                    <p class="lead">
                        { research & design }
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-alertFocus-001.png" alt="Old version of alertfocus.com">
                        The old version of alertfocus.com was laid out very similar to many other behavioral health sites, like <a href="http://www.fbh.com/rehabilitative.html" target="_blank">Foundations Behavioral Health<sup><i aria-hidden="true" class="icon-popup"></i></sup></a> and <a href="http://www.ibc-pa.org/" target="_blank">The Institute for Behavioral Health<sup><i aria-hidden="true" class="icon-popup"></i></sup></a> for example, where the landing page has a navigational menu, an abundance of text and contact information; no clear call to action and no incentive for exploration. This type of design works for visitors who come to a page looking for something specific, like a form or contact information, and are easily able to find what they need. But for a site that is trying to soft sell a service, the site needs to create a narrative through which content can educate visitors on the benefits of the service and, ultimately, influence decision making. This was our goal for the alertfocus.com re-design.
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-alertFocus-002.png" alt="USA Today highlight">
                        We put together a list of sites to exemplify layouts and styles that we thought would allow the content of alertfocus.com to tell the story we wanted it to tell. Of those, the one that bubbled to the top of our list was <a href="http://www.usatoday.com" title="usatoday.com">usatoday.com</a>. The re-designed alertfocus.com borrows some of its design from the usatoday.com site. We imitated the navigation menu, the way images were displayed as "cards" for each article and switched the "Top Stories" section to a "Most Popular" section. These elements helped us create a non-linear flow for the site, as well as make the site more visually appealing.
                    </p>
                    <p>
                        We also replicated the way similar groups of content are associated through the use of color. On usatoday.com, the sports section/articles feature a red label; the money section/articles a green label; etc. On alertfocus.com, the academic section/articles feature a red label; the addictions section/articles feature a green label. Though the implementation is different, the concept is the same.
                        <img class="left highlight" src="../../images/highlight-alertFocus-003.png" alt="Color theming highlight">
                    </p>
                    <p>
                        We kept a couple elements from the original alertfocus.com design, like the vertical navigation on the left side of the page and the contact information at the top of the page. But we also added a couple new features to the site, too, like search functionality and a social sharing feature. The content of the site remained relatively unchanged aside from some search engine optimizations.
                    </p>
                    <br/>
                    <p class="lead">
                        { database migration }
                    </p>
                    <p>
                        The biggest challenge of this project was migrating the database. The old version of the site was built using the PHP template engine <a href="http://www.smarty.net/" target="_blank">Smarty<sup><i aria-hidden="true" class="icon-popup"></i></sup></a>. But the framework had not been maintained and at some point ceased to populate the database correctly when new data was added to the site via the custom-built admin interface. Looking through the database I found a lot of good data but also a lot of corrupt and mis-placed data. The database contained over 100 articles' worth of content and metadata.
                    </p>
                    <p>
                        We chose to build the re-designed alertfocus.com in WordPress. Not only does WordPress have an easy-to-learn admin interface, it also has a great developer support community&mdash;making it easy to hand off to the next developer&mdash;and is a well maintained product. Unfortunately, the database structure used by the old version of alertfocus.com wasn't well documented, nor did it turn out to be very similar to the <a href="http://codex.wordpress.org/images/9/97/WP3.8-ERD.png" title="WordPress database diagram">WordPress database structure<sup><i aria-hidden="true" class="icon-popup"></i></sup></a>, nor could its creator be reached for support. So I ended up doing a dump of the old database, sifted through it using Excel and reformatted what data I could salvage so that it could be re-imported into WordPress. This certainly saved time over manually re-entering all of the data into the new database. However, it was also an unexpected consumption of development time, which not only took away from time I could devote to improving the site's design, but also pushed out the project's completion date.
                    </p>
                    <br/>
                    <p class="lead">
                        { WordPress }
                    </p>
                    <p>
                        The site displays content in a number of unique ways. The homepage features seven articles, which are loaded at random on each page load using the <code class="language-php">'orderby' => 'rand'</code> WordPress feature. We decided to load articles in this manner on the homepage mainly because new content is not added to the site very frequently. Loading articles randomly exposes visitors to potentially new content on each visit even if new content has not necessarily been added to the site recently.
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-alertFocus-004.png" alt="Most Popular articles highlight">
                        The homepage also features a "Most Popular" section in which the five most popular articles are listed. This list is controlled by a <a href="https://github.com/chasewoodford/alertfocus.com/blob/master/wp-content/themes/starkers-master/functions.php#L117-L149" target="_blank">custom WordPress function<sup><i aria-hidden="true" class="icon-popup"></i></sup></a> that detects the post view count meta data and stores it as a custom field on each post. The <code class="language-php">af_post_views_count</code> can be viewed and edited by WordPress admins, as well, via the Custom Fields section on each post's edit page.
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-alertFocus-005.png" alt="Categories highlight">
                    </p>
                    <p class="clearfix">
                        <img class="right highlight" src="../../images/highlight-alertFocus-006.png" alt="Related posts highlight">
                    </p>
                    <br/>
                    <p class="lead">
                        { performance monitoring & optimization }
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-alertFocus-007.png" alt="Google Analytics highlight">
                    </p>
                    <p class="clearfix">
                        <img class="right highlight" src="../../images/highlight-alertFocus-008.png" alt="Waterfall highlight">
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