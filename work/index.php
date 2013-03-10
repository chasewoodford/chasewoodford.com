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
                    <div class="clearfix image-main" style="text-align: left;">
                        <a class="left" href="#">
                            <img src="/images/screenshot-2012GolfClassic.png" style="margin-right:10px;">
                        </a>
                        <div class="copyright" style="display:table;">
                            <div style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Client:</div><div style="display:table-cell;padding-left:10px;">Verilogue</div>
                            </div>
                            <div style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Project:</div><div style="display:table-cell;padding-left:10px;">2012 Golf Classic</div>
                            </div>
                            <div style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Type:</div><div style="display:table-cell;padding-left:10px;">Website</div>
                            </div>
                            <div style="display:table-row">
                                <div style="display:table-cell;padding-bottom:10px;">Tags:</div><div style="display:table-cell;padding-left:10px;">HTML5, CSS3, JavaScript, Responsive Design</div>
                            </div>
                        </div>
                    </div>
                    <p class="lead-font">
                        This is a captivating headline, one that will bring all the boys to the yard.
                    </p>
                    <p>
                        This is where I'll put a brief write up of the project's scope, the challenges encountered and how they were overcome. Below this introduction will be a link to read more.
                        <br/><a class="no-shadow continue-reading inline" href="'. get_permalink($post->ID) . '" title="View full post">continue reading &#187;</a>
                    </p>
                </section>
                <div class="clear"></div>
            </article>

            <section class="grid-12 preview-container">
<!--                <p class="lead"> { recently consumed } </p>-->
                <div class="preview">
                    <a href="#">
                        <img src="/images/screenshot-patientJourney.png" width="200" height="100">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="/images/screenshot-popArchive.png" width="200" height="100">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="/images/screenshot-verilogue.png" width="200" height="100">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="http://placehold.it/200x100">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="http://placehold.it/200x100">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="http://placehold.it/200x100">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="http://placehold.it/200x100">
                    </a>
                </div>
                <div class="preview">
                    <a href="#">
                        <img src="http://placehold.it/200x100">
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