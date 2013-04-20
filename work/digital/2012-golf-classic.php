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
                        <a class="left screenshot" href="#">
                            <img class="main" src="/images/screenshot-2012GolfClassic.png">
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
                                    <a href="http://www.verilogue.com/golf/2012golfclassic/index.html" title="see it live" target="_blank">see it live &raquo;</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
                    </p>
                    <div class="blog-image text-center">
                        <img src="../../images/highlight-2012GolfClassic-001.png" alt=""/>
                    </div>
                    <p>
                        Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis.
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