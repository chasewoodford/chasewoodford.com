<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chase Woodford &#124; Blog</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../../../../css/compiled/style.css">

    <!-- wp head -->
    <?php wp_head(); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
<body id="top" <?php body_class(); ?>>
<div class="wrapper">
    <header class="grid-8">
        <img class="logo pulse" src="../../../../images/logo.png" alt="logo"/>
        <h1 class="sitename"><a class="kansas" href="../" title="home">chasewoodford.com</a></h1>
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
                    <a class="about" href="../../../../about" title="about"><h2>about</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a class="work" href="../../../../work" title="work"><h2>work</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a class="blog" href="../../../../blog" title="blog"><h2>blog</h2></a>
                </li>
                <li><h2>&bull;</h2></li>
                <li>
                    <a class="contact" href="../../../../contact" title="contact"><h2>contact</h2></a>
                </li>
            </ul>
        </nav>

    </header>