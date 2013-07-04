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
                            <iframe width="400" height="300" src="https://www.youtube.com/embed/tGiIzvuLo4M?feature=player_embedded&fs=1&rel=0&showinfo=0&autohide=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>
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
                    <p></p>
                    <p></p>
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