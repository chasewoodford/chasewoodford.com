<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/compiled/style.css">
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</head>
<body id="top">
<div class="wrapper">
    <?php
    include ("./header.php");
    ?>

    <div class="grid-8">

        <?php
        require('./blog/wp-blog-header.php');
        ?>

        <?php
        $posts = query_posts('numberposts=1&cat=3');
        foreach ($posts as $post) : start_wp(); ?>
            <div class="latest-blog"></div>
            <article class="grid-8 hero post type-post">
                <header>
                    <h3 class="title-background">
                        <a class="post-title" href="<?php the_permalink() ?>" title="View full post"><?php the_title(); ?></a>
                        <span class="blog-category" style="">
                            <?php the_category(', ') ?>
                        </span>
                    </h3>
                </header>
                <section class="content">
                    <?php the_excerpt(); ?>
                    <div class="stumblr-meta">
                        <p>
                            <span class="stumblr-date">
                                <?php $arc_year = get_the_time('Y'); ?>
                                <?php $arc_month = get_the_time('m'); ?>
                                <a class="no-shadow" href="<?php echo get_month_link($arc_year, $arc_month); ?>" title="Archive for <?php the_time('F Y'); ?>">
                                    <?php the_time('F Y'); ?>
                                </a>
                            </span>
                            <span class="stumblr-category">
                                <?php
                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach($posttags as $tag) {
                                            echo '<a href="';echo bloginfo(url);echo '/?tag=' . $tag->slug . '" class="no-shadow">' . $tag->name . '</a>&nbsp;&nbsp;&nbsp;';
                                        }
                                    }
                                ?>
                            </span>
                            <span class="stumblr-other-right">
                                <a href="<?php comments_link(); ?>" class="no-shadow">Comments:&nbsp;<?php $commentscount = get_comments_number(); echo $commentscount; ?></a>
                            </span>
                        </p>
                    </div>
                </section>
                <div class="clear"></div>
            </article>
        <?php
        endforeach;
        ?>

        <article id="tweet-container" class="grid-10"></article>
        <div class="recent-rambling"></div>
    </div>

    <?php
    include ("./blog/wp-content/themes/stumblr/footer.php");
    ?>