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
        include ('../header.php');
        ?>
        <div class="grid-8 main-content" role="main">
            <?php
            require('../blog/wp-blog-header.php');
            ?>
            <article class="grid-8">
                <header>
                    <h3 class="page-title-bar">
                        <div class="page-title">portfolio</div>
                        <div class="page-links">
                            <a title="download resume" href="#"><i class="icon-doc" aria-hidden="true"></i><span>resume</span></a>
                            <span class="divider">/</span>
                            <a title="contact me" href="/contact"><i class="icon-chat"></i><span>contact</span></a>
                        </div>
                    </h3>
                </header>
                <section>
                    <div class="clearfix image-main text-left">
                        <div class="left side-corner-tag">
                            <a class="left screenshot" href="./digital/2012-golf-classic">
                                <img src="/images/screenshot-2012GolfClassic.png">
                            </a>
                            <p class="ribbon">
                                <span class="text-center">featured</span>
                            </p>
                        </div>
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
                        </ul>
                    </div>
                    <p>
                        Verilogue's Golf Classic is an annual fundraising event that benefits the Make-A-Wish Foundation. In 2012, the event helped raise over $8,000 for the cause. The event's website is the starting point for event registration and information delivery to all participants and volunteers...
                        <br/><a class="continue-reading" href="./digital/2012-golf-classic">continue reading &#187;</a>
                    </p>
                </section>
                <div class="clear"></div>
            </article>
            <?php
            include ('portfolio-previews.php');
            ?>
        </div>
    </div>
</div>
<?php
include ('../blog/wp-content/themes/v2/footer.php');
?>