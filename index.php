<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/compiled/style.css">
</head>
<body id="top">
<div class="wrapper">
    <header class="grid-8">
        <img class="logo pulse" src="images/logo.png" alt="logo"/>
        <h1 class="sitename">chasewoodford.com</h1>
        <aside class="search-box">
            <form action="" method="post">
                <input type="text" name="text" class="search-box-input"/>
                <button class="btn search-box-btn">
                    <i class="icon-search icon-white"></i>
                </button>
            </form>
        </aside>
        <nav class="nav-primary">
            <a class="about" href="../about" title="about"><h2>about</h2></a><h2 class="bullet">&bull;</h2>
            <a class="work" href="../work" title="work"><h2>work</h2></a><h2 class="bullet">&bull;</h2>
            <a class="blog" href="../blog" title="blog"><h2>blog</h2></a><h2 class="bullet">&bull;</h2>
            <a class="contact" href="../contact" title="contact"><h2>contact</h2></a>
        </nav>

    </header>

    <div class="grid-8 main-content">

        <?php
        require('./blog/wp-blog-header.php');
        ?>

        <?php
        $posts = get_posts('numberposts=1&order=DSC&orderby=post_title');
        foreach ($posts as $post) : start_wp(); ?>
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
                                <?php the_time('F Y'); ?>
                            </span>
                            <span class="stumblr-category">
                                <?php
                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach($posttags as $tag) {
                                            echo '<a href="';echo bloginfo(url);echo '/?tag=' . $tag->slug . '" class="no-shadow">' . $tag->name . '</a>&nbsp;&nbsp;';
                                        }
                                    }
                                ?>
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

    </div>

    <?php
    include ("./blog/wp-content/themes/stumblr/footer.php");
    ?>