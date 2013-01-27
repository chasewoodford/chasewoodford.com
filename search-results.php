<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">

    <title>Chase Woodford &#124; About</title>

    <link rel="shortcut icon" type="image/x-icon" href="http://www.chasewoodford.com/favicon.ico">

    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="search-results">
<div class="wrapper">
    <div class="content-wrapper">
        <?php
        include ('./header.php');
        ?>
        <div class="grid-8 main-content" role="main">
            <?php
            require('./blog/wp-blog-header.php');
            ?>
            <article class="grid-8">
                <div id="post-area" class="grid-blog">
                    <header>
                        <h3 class="page-title-bar">
                            <div class="page-title">search results</div>
                        </h3>
                    </header>
                    <section>
                        <script>
                            (function() {
                                var cx = '001111473829683533715:pmw2lbmd7y0';
                                var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
                                gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                                    '//www.google.com/cse/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
                            })();
                        </script>
                        <gcse:search></gcse:search>
                        <div class="clear"></div>
                    </section>
                </div>
                <div id="sidebar" class="grid-2">
                    <?php if ( is_active_sidebar( 'v2_widgets')) { ?>
                    <div id="sidebar-widget-area">
                        <?php dynamic_sidebar( 'v2_widgets' ); ?>
                    </div>
                    <?php }  ?>
                </div>
            </article>
        </div>
    </div>
</div>
<?php
include ('./blog/wp-content/themes/v2/footer.php');
?>