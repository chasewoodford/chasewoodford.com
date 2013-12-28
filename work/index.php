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
                            <a title="view resume" href="#"><i class="icon-doc" aria-hidden="true"></i><span>resume</span></a>
                            <span class="divider">/</span>
                            <a title="contact me" href="/contact"><i class="icon-chat"></i><span>contact</span></a>
                        </div>
                    </h3>
                </header>
                <?php
                include ('featured.php');
                ?>
                <div class="clearfix"></div>
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