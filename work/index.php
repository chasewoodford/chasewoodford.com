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
                            <a title="download resume" href="#"><i class="icon-doc" aria-hidden="true"></i> <span>resume</span></a>
                            <span class="divider">/</span>
                            <a title="contact me" href="/contact"><i class="icon-chat"></i><span>contact</span></a>
                        </div>
                    </h3>
                </header>
                <section>
                    <div class="image-main">
                        <a href="#">
                            <img src="/images/screenshot-2012GolfClassic.png">
                        </a>
                    </div>
                    <p class="lead-font">
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                    <p>
                        Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                    </p>
                </section>
                <div class="clear"></div>
            </article>

            <section class="grid-12 preview-container">
                <div class="preview">
                    <a href="#">
                        <img src="/images/screenshot-patientJourney.png">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="/images/screenshot-popArchive.png">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="/images/screenshot-verilogue.png">
                    </a>
                </div>
            </section>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php
include ('../blog/wp-content/themes/v2/footer.php');
?>