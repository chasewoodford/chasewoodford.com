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
        <article id="tweet-container" class="grid-10 well"><div class="twitterfeed"></div></article>
    </div>
</div>

<?php include ('./blog/wp-content/themes/v2/footer.php') ?>
<script type="text/javascript" charset="utf-8" src="/twitter/jquery.tweet.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.twitterfeed').tweet({
            modpath: '/twitter/',
            count: 1,
            loading_text: 'loading twitter feed...'
        });
    });
</script>