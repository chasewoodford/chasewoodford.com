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
        <img class="logo pulse" src="images/logo.png" alt="Chase Woodford &#124; Designer &amp; Developer"/>
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
            <ul>
                <li>
                    <a href="./about" title="about"><h2>about</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="./work" title="work"><h2>work</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="./blog" title="blog"><h2>blog</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="./contact" title="contact"><h2>contact</h2></a>
                </li>
            </ul>
        </nav>

    </header>

    <div class="grid-8">

        <?php
        require('./blog/wp-blog-header.php');
        ?>

        <?php
        $posts = get_posts('numberposts=1&order=DSC&orderby=post_title');
        foreach ($posts as $post) : start_wp(); ?>
            <article class="grid-8 hero post type-post">
                <header>
                    <h3 class="stumblr-title">
                        <a class="post-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </h3>
                </header>
                <section class="stumblr-content">
                    <?php the_excerpt(); ?>
                    <div class="stumblr-meta">
                        <p><span class="stumblr-date"><?php the_time(get_option('date_format')); ?></span> <span class="stumblr-category"> <?php echo strip_tags(get_the_tag_list('',', ','')); ?></span></p>
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