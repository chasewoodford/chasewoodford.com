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
                        <a class="title-bar" href="http://www.verilogue.com/golf/2012golfclassic/index.html" title="see it live" target="_blank">2012 Golf Classic</a>
                    </h3>
                </header>
                <section>
                    <div class="grid-8 clearfix image-main text-left">
                        <a class="left screenshot" href="http://www.verilogue.com/golf/2012golfclassic/index.html" title="see it live" target="_blank">
                            <img class="main" src="/images/screenshot-2012GolfClassic.png" alt="Verilogue 2012 Golf Classic website">
                        </a>
                        <ul class="text-left table">
                            <li class="table-row">
                                <div class="table-title">Client:</div>
                                <div class="table-data">Verilogue</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Title:</div>
                                <div class="table-data">2012 Golf Classic</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Date:</div>
                                <div class="table-data">October 2012</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Type:</div>
                                <div class="table-data">Website</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Tags:</div>
                                <div class="table-data">HTML5, CSS3, JavaScript, Parallax Scrolling, Responsive Web Design, PayPal Integration</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title"></div>
                                <div class="table-data">
                                    <a href="http://www.verilogue.com/golf/2012golfclassic/index.html" title="see it live" target="_blank"><i class="icon-globe" aria-hidde="true"></i>&nbsp;<span>see it live &raquo;</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <p class="lead">
                        { overview }
                    </p>
                    <p>
                        Verilogue's Golf Classic is an annual fundraising event that benefits the Make-A-Wish Foundation. In 2012, the event helped raise over $8,000 for the cause. The event's website is the starting point for event registration and information delivery to all participants and volunteers.
                    </p>
                    <p>
                        Not only did this project provide an opportunity to showcase the lighter, more playful side of a great company, it also provided the opportunity to improve upon the user experience of the inaugural site. With a year's worth of user feedback and data tracking under the belt, I was particularly excited to tackle this challenge. Having created the site for the event's first year, too, I was aware of the issues both internal and external users experienced with that site, and was determined to improve the experience in 2012, knowing it would lead to a higher conversion rate and less project management.
                    </p>
                    <br/>
                    <p class="lead">
                        { PayPal integration }
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-2012GolfClassic-003.png" alt="PayPal intergration highlight"/>
                        Our number one goal for the 2012 event was to simplify the donation/registration process. In 2011, we tracked registrations on a spreadsheet and accepted payment by cash or check only. Though we did a great job managing the process, it was overly time consuming, hardly scalable and not the ideal experience for our users.
                    </p>
                    <p>
                        So in 2012 we opted to integrate PayPal. The brand is relatively well known, secure and hassle-free. They have an easy-to-use and well documented API, the transactional fees they charge are low and their terms/policies are pretty straight forward.
                    </p>
                    <p>
                        We added several PayPal buttons to the site to allow users to make donations, register and pay to participate and sign up to be a sponsor of the event. We also made available a generic, non-PayPal registration form for those users who preferred to pay via cash or check; made a PayPal looking button for the form to keep the look consistent.
                    </p>
                    <p>
                        Another significant improvement made to the registration process on the back end was our integration of Marketo, an automated marketing solution. Instead of tracking participants' activity on a spreadsheet, we added users to a mailing list using Marketo's API. No more manual tracking of registrations and payments. In 2012 we knew who signed up for what and could easily tailor custom messages to a more targeted group of participants.
                    </p>
                    <p>
                        As is the case with any good design, these improvements went mostly unnoticed by the event's participants. But that ultimately was the goal.
                    </p>
                    <br/>
                    <p class="lead">
                        { parallax scrolling }
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-2012GolfClassic-001.png" alt="parallax scrolling highlight"/>
                        Another goal of the site was to show visitors who may not have participated in the first year's event what to expect using images taken from the prior year. To accomplish this, the site made use of a parallax scrolling effect, or the movement of layered images at different speeds. We had hundreds of pictures of the first year's participants golfing, winning prizes and having a great time. We wanted to display as many of these as possible without taking up too much real estate. The parallax scrolling effect not only allowed us to showcase all the fun of the previous year's event, but it also just looked cool and was a great way to break up content on the site.
                    </p>
                    <br/>
                    <p class="lead">
                        { CSS text-shadows, transitions and more }
                    </p>
                    <p>
                        <img class="right highlight" src="../../images/highlight-2012GolfClassic-002.png" alt="CSS3 highlight"/>
                        In addition to the parallax scrolling effect, the site was sprinkled with other cutting-edge CSS effects. The sponsor images had an <code class="language-css">opacity</code> effect applied to them, where on hover they would "come to life" in full color. The site's section titles used several layers of <code class="language-css">text-shadow</code> to make the words look like they were jumping off the page. Some of the images were treated with a <code class="language-css">transform: rotate()</code> effect to give them a loosely-scattered-on-the-page look. And all of the links and critical text information was treated with a smooth <code class="language-css">transition</code> effect, where background and font colors would change and text would move or become highlighted on hover. These additions, though not critical to the overall design, did add to the enhanced experience for users who visited the site using modern browsers.
                    </p>
                    <br/>
                    <p class="lead">
                        { adaptive web design }
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-2012GolfClassic-004.png" alt="adaptive web design highlight"/>
                        From analysis of the first year's site activity, we knew there would not be much traffic from devices other than desktops. Of course, a year had passed, and users' behavior patterns had changed as quickly as the devices they used. Even if tablets and mobile devices did not account for a significant amount of traffic, there were key interactions made on these devices we had to prepare for, which is why we decided to make the site adaptive.
                    </p>
                    <p>
                        The most critical interaction occurred the day of the event &mdash; participants needed to make it there. Many used their mobile devices to check on last minute details like location and time information. Others wanted to make last minute donations. Others still wanted to share the event with their social networks.
                    </p>
                    <p>
                        So in our adaptive design the site was stripped down to critical text, links and forms. Tapping location links on a smartphone gave users quick access to directions via map apps. Tapping e-mail addresses provided quick access to event admins for immediate help. And integrated share buttons allowed users to update their social network statuses on the go. The mobile-optimized version of the site was built using <code class="language-css">@media</code> queries that adjusted the fluid desktop layout to look good on small-screen devices while increasing the site's speed and performance, as well.
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