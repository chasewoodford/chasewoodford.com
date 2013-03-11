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
                        <a class="left" href="#">
                            <img src="/images/screenshot-2012GolfClassic.png" style="margin-right:10px;">
                        </a>
                        <ul class="copyright text-left" style="display:table;">
                            <li style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Client:</div>
                                <div style="display:table-cell;padding-left:10px;">Verilogue</div>
                            </li>
                            <li style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Title:</div>
                                <div style="display:table-cell;padding-left:10px;">2012 Golf Classic</div>
                            </li>
                            <li style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Type:</div>
                                <div style="display:table-cell;padding-left:10px;">Website</div>
                            </li>
                            <li style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Tags:</div>
                                <div style="display:table-cell;padding-left:10px;">HTML5, CSS3, JavaScript, Parallax Scrolling, Responsive Web Design, PayPal Integration</div>
                            </li>
                        </ul>
                    </div>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
                    </p>
                </section>
                <div class="clear"></div>
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