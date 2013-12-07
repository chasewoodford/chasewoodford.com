<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Chase Woodford">
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <title>Chase Woodford &#124; Designer &amp; Developer</title>

    <link rel="icon" href="/favicon.ico">

    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top" class="home">
<div class="wrapper">
    <?php include ('./header.php') ?>
    <div class="grid-8 hero" role="main">
        <?php require('./blog/wp-blog-header.php') ?>
        <?php
        query_posts( 'cat=-10,-51&posts_per_page=1&orderby=post_date&order=DESC' );
        while ( have_posts() ) : the_post();
        ?>
        <article class="grid-8 main-content hero clearfix">
            <header>
                <h3>
                    <span class="blog-category clearfix">
                        <?php the_category(', ') ?>&nbsp;>
                    </span>
                    <a class="title-bar" href="<?php the_permalink() ?>" title="view full post"><?php the_title(); ?></a>
                </h3>
            </header>
            <section class="content">
                <?php the_excerpt(); ?>
            </section>
        </article>
        <?php
        endwhile;
        ?>
        <article id="tweet-container" class="grid-8 well" style="padding:20px;text-align:center;">
            <div class="quote-before icon-quote-right-alt"></div>
            <div class="tweet">
                <a class="twitter-timeline"
                   data-tweet-limit="1"
                   data-link-color="#0088CC"
                   data-chrome="noborders noheader nofooter"
                   href="https://twitter.com/chase1263070"  data-widget-id="409109781861785600">Loading...</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div class="quote-after icon-quote-left-alt"></div>
        </article>

    </div>
</div>
<?php include ('./blog/wp-content/themes/v2/footer.php') ?>
