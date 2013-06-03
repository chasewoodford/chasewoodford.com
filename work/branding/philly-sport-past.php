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
                        portfolio > branding
                    </span>
                        <a class="title-bar" href="https://www.phillysportpast.com" title="see it live" target="_blank">PhillySportPast logo</a>
                    </h3>
                </header>
                <section>
                    <div class="grid-8 clearfix image-main text-left">
                        <a class="left screenshot" href="https://www.phillysportpast.com" title="see it live" target="_blank">
                            <img class="main" src="/images/screenshot-phillySportPast.png" alt="PhillySportPast logo">
                        </a>
                        <ul class="text-left table">
                            <li class="table-row">
                                <div class="table-title">Client:</div>
                                <div class="table-data">PhillySportPast</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Title:</div>
                                <div class="table-data">PhillySportPast logo</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Date:</div>
                                <div class="table-data">July 2012</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Type:</div>
                                <div class="table-data">Logo</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title">Tags:</div>
                                <div class="table-data">Corporate branding</div>
                            </li>
                            <li class="table-row">
                                <div class="table-title"></div>
                                <div class="table-data">
                                    <a href="https://www.phillysportpast.com" title="see it live" target="_blank"><i class="icon-globe" aria-hidde="true"></i>&nbsp;<span>see it live &raquo;</span></a>
                                </div>
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
                    <p class="lead">
                        { ideation and iteration }
                    </p>
                    <p></p>
                    <p></p>
                    <br/>
                    <p class="lead">
                        { vectorizing }
                    </p>
                    <p>
                        <img class="left highlight" src="../../images/highlight-phillySportPast-001.png" alt="PhillySportPast logo"/>
                    </p>
                    <br/>
                    <p>
                        To learn more about how this logo was designed and developed, <a href="/contact">contact me</a>.
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