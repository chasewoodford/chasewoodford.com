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
    <header class="grid-10">
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

    <?php
    require('./blog/wp-blog-header.php');
    ?>

    <?php
    $posts = get_posts('numberposts=1&order=DSC&orderby=post_title');
    foreach ($posts as $post) : start_wp(); ?>
        <?php the_date(); echo "<br />"; ?>
        <?php the_title(); ?>
        <?php the_excerpt(); ?>
        <?php
    endforeach;
    ?>

    <?php
    include ("./blog/wp-content/themes/stumblr/footer.php");
    ?>