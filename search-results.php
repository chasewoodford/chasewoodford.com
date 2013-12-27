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
        <div class="grid-8 hero main-content" role="main">
            <div class="grid-8 left" role="main">
                <?php
                require('./blog/wp-blog-header.php');
                ?>
                <article class="hero clearfix">
                    <header>
                        <h3 class="page-title-bar">
                            <div class="page-title">search results</div>
                        </h3>
                    </header>
                    <section class="content">
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
                        <div class="clearfix"></div>
                    </section>
                </article>
            </div>
            <div id="sidebar" class="grid-4 right" role="complementary">
                <?php if ( is_active_sidebar( 'v2_widgets')) { ?>
                    <div id="sidebar-widget-area" class="sidebar-widget-area">
                        <?php dynamic_sidebar( 'v2_widgets' ); ?>
                        <div id="tags-2" class="side-widget widget_tags">
                            <h4>tags</h4>
                            <ul>
                                <?php
                                $wptc = wp_tag_cloud('smallest=13.5&largest=13.5&format=array&unit=px&number=20&echo=0');
                                foreach( $wptc as $wpt ) echo "<li>" . $wpt . "</li>\n";
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php }  ?>
            </div>
        </div>
    </div>
</div>
<?php
include ('./blog/wp-content/themes/v2/footer.php');
?>