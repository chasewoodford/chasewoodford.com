<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">

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
        <article id="tweet-container" class="grid-10 well tweets"></article>
    </div>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script src="/javascript/chirp.min.js"></script>
<script>Chirp({
        user: 'chase1263070', //Twitter username
        max: 1, //Maximum number of tweets to show
        count: 1, //Total tweets to retrieve
        retweets: false, //Show/Don't show retweets
        replies: false,  //Show/Don't show replies
        cacheExpire: 1000 * 60 * 2, //Number of milliseconds to cache tweets
        target: 'tweet-container', //Where the tweet gets loaded
        templates: {
            tweet: '<div class="quote-before icon-quote-right-alt"></div><div class="tweet"><p>{{html}}</p></div><div class="quote-after icon-quote-left-alt"></div><div class="left attribute twitter-attribute">{{time_ago}}&nbsp;via&nbsp;{{source}}</div><div class="right twitter-button"><a href="https://twitter.com/chase1263070" class="twitter-follow-button attribute" data-show-count="false" data-lang="en">Follow @chase1263070</a></div>'
        }
    })</script>
<?php include ('./blog/wp-content/themes/v2/footer.php') ?>