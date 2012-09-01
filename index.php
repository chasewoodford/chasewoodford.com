<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/compiled/home.css">
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
                    <a class="nav-primary-link" href="#"><h2>about</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="#"><h2>work</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="#"><h2>blog</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="#"><h2>contact</h2></a>
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
            <article class="grid-8" style="border:1px dashed #fa8072">
                <header>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </header>
                <?php the_excerpt(); ?>
                <time pubdate>
                    <?php the_date(); echo "<br />"; ?>
                </time>
            </article>
            <?php
        endforeach;
        ?>

        <article id="tweet-container" class="grid-10"></article>

    </div>

    <?php
    include ("./blog/wp-content/themes/stumblr/footer.php");
    ?>