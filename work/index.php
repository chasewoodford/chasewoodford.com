<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/compiled/style.css">
</head>
<body id="top">
<div class="wrapper">
    <header class="grid-8">
        <img class="logo pulse" src="/images/logo.png" alt="Chase Woodford &#124; Designer &amp; Developer"/>
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
                    <a href="../about"><h2>about</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a class="nav-active" href="#"><h2>work</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="#"><h2>blog</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a href="../blog"><h2>contact</h2></a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="grid-8">

        <?php
        require('../blog/wp-blog-header.php');
        ?>

        <article class="grid-8 hero post type-post">
            <header>
                <h3 class="stumblr-title">
                    This is a header!
                </h3>
            </header>
            <section class="stumblr-content">
                <p>This is some content! Lorem ipsum and all that jazz.</p>
            </section>
            <div class="clear"></div>
        </article>

    </div>

    <?php
    include ("../blog/wp-content/themes/stumblr/footer.php");
    ?>