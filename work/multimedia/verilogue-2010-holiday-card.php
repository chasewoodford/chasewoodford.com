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
                        Verilogue 2010 Holiday Card
                    </span>
                    </h3>
                </header>
                <section>
                    <div class="grid-8 clearfix image-main text-left">

                        <video class="left main" width="400" poster="/images/screenshot-2010HolidayCard-poster.png" controls>

                            <source src="../../resources/video/verilogue-2012-holiday-card.webm" type="video/webm" />
                            <source src="../../resources/video/verilogue-2012-holiday-card.mp4" type="video/mp4" />
                            <source src="../../resources/video/verilogue-2012-holiday-card.ogg" type="video/ogg" />

<!--                            TODO: Add JW Player-->
<!--                            <object width="400" type="application/x-shockwave-flash" data="__FLASH__.SWF">-->
<!---->
<!--                                <param name="movie" value="__FLASH__.SWF" />-->
<!--                                <param name="flashvars" value="controlbar=over&amp;image=__POSTER__.JPG&amp;file=__VIDEO__.MP4" />-->
<!---->
<!--                                <img src="/images/screenshot-2010HolidayCard.png" width="400" height="200" alt="Verilogue 2010 holiday card"-->
<!--                                     title="No video playback capabilities, please download the video below" />-->
<!--                            </object>-->

                        </video>
                        <ul class="text-left table">
                            <li class="table-row">
                                <div class="table-title">Client:</div>
                                <div class="table-data">Verilogue</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Title:</div>
                                <div class="table-data">2010 holiday card</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Date:</div>
                                <div class="table-data">November 2010</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Type:</div>
                                <div class="table-data">Video</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Download:</div>
                                <div class="table-data"><a href="../../resources/video/verilogue-2012-holiday-card.mp4">MP4</a>&nbsp;<a href="../../resources/video/verilogue-2012-holiday-card.ogg">OGG</a>&nbsp;<a href="../../resources/video/verilogue-2012-holiday-card.webm">WebM</a></div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Tags:</div>
                                <div class="table-data">HTML e-mail, Sony Vegas</div>
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <p class="lead">
                        { overview }
                    </p>
                    <p></p>
                    <p></p>
                    <br/>
                    <p>
                        To learn more about how this video was designed and developed, <a href="/contact">contact me</a>.
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