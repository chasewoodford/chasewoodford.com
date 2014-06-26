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
                        portfolio > multimedia
                    </span>
                    <span class="title-bar">
                        eLiterati
                    </span>
                    </h3>
                </header>
                <section>
                    <div class="grid-8 clearfix image-main text-left">

                        <div class="left main">
                            <iframe width="400" height="265" src="https://www.youtube.com/embed/tGiIzvuLo4M?feature=player_embedded&fs=1&rel=0&showinfo=0&autohide=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <ul class="text-left table">
                            <li class="table-row">
                                <div class="table-title">Client:</div>
                                <div class="table-data">CareCoach</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Title:</div>
                                <div class="table-data">eLiterati</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Date:</div>
                                <div class="table-data">October 2011</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Type:</div>
                                <div class="table-data">Video</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Tags:</div>
                                <div class="table-data">Sony Vegas, Photoshop, HTML5, jQuery Mobile</div>
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <p class="lead">
                        { overview }
                    </p>
                    <p>
                        Health 2.0 "promotes, showcases and catalyzes new technologies in health care...through a worldwide series of conferences, code-a-thons, prize challenges, and more." One of these prize challenges was the <a href="http://www.health2con.com/devchallenge/novartis-cardioengagement-challenge/" target="_blank">Novartis CardioEngagement Challenge<sup><i aria-hidden="true" class="icon-popup"></i></sup></a>. eLiterati was an idea for a mobile application I put together as an entry into the dev challenge on behalf of CareCoach, Verilogue's patient-focused web and mobile platform.
                    </p>
                    <p>
                        The contest's mission was to "create an interactive solution that would motivate and empower people to proactively manage their health...through easy access and organization of their personal health information, relevant content, and social support."
                    </p>
                    <p>
                        eLiterati is a mobile application that utilizes publicly available resources (RSS feeds) in a points-based game that helps users better manage cardiovascular health by increasing health literacy through game mechanics (like that of a Tamagotchi), continuous learning and information sharing (via social media). It was also planned to have optional integration with our CareCoach platform to extend the app's usefulness while at the same time helping to build the CareCoach community. The app was designed to be not a native mobile application, but a HTML webapp using the jQuery Mobile framework.
                    </p>
                    <p>
                        Here is a <a href="../../resources/documents/eLiterati.pdf">PowerPoint presentation</a> outlining the application in more detail.
                    </p>
                    <br/>
                    <p class="lead">
                        { video teaser }
                    </p>
                    <p>
                        The video above was a teaser I put together to introduce the application.
                    </p>
                    <p>
                        In my opinion, the coolest part of the video is the cinemagraph-like imagery, where it looks like a still image is moving ever so slightly. This was achieved by slicing up stock photography&mdash;foreground from background&mdash;and panning the layers in different ways to make the still image "come alive". Can you tell which images received this treatment? Watch closely.
                    </p>
                    <p>
                        The video, produced with Sony Vegas Pro, also features multiple different media inputs. It opens with a video snippet of an MRI brain scan, followed by some stock imagery, animations and mobile emulator video, with text tying the scenes together. The music is that of <a href="http://www.dandeacon.com/" target="_blank">Dan Deacon's<sup><i aria-hidden="true" class="icon-popup"></i></sup></a> earliest work&mdash;a track entitled "The House I Was Isn't My Girlfriends Porsche" found on his 2003 release <i>Silly Hat vs. Egale Hat</i>.
                    </p>
                    <br/>
                    <p class="lead">
                        { outcome }
                    </p>
                    <p>
                        Though eLiterati fell a bit short in comparison to other entries (there were some really brilliant applications submitted), it was a great creative thinking exercise and I was grateful for the opportunity to participate and the support received by my team at Verilogue.
                    </p>
                    <br/>
                    <p>
                        To learn more about how this video and/or app was designed and developed, <a href="/contact">contact me</a>.
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