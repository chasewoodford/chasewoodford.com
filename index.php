<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta content="" name="google-site-verification" />
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width">
    <title>Chase Woodford &#124; Designer &amp; Developer</title>
    <link rel="stylesheet" href="/css/compiled/style.css">
    <link href="www.chasewoodford.com" rel="canonical" />
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</head>
<body id="top">
<div class="wrapper">
    <?php
    include ('./header.php');
    ?>
    <div class="grid-8" style="padding: 120px 2px 0;" role="main">
        <?php
        require('./blog/wp-blog-header.php');
        ?>
        <?php
        query_posts( 'cat=-10,-51&posts_per_page=1&orderby=post_date&order=DESC' );
        while ( have_posts() ) : the_post();
        ?>
            <article class="grid-8 hero post type-post">
                <header>
                    <h3>
                        <span class="blog-category clearfix">
                            <?php the_category(', ') ?>&nbsp;>
                        </span>
                        <a class="title-bar" href="<?php the_permalink() ?>" title="View full post"><?php the_title(); ?></a>
                    </h3>
                </header>
                <section class="content">
                    <?php the_excerpt(); ?>
                </section>
            </article>
        <?php
        endwhile;
        ?>
        <article id="tweet-container" class="grid-10 well"></article>
    </div>
</div>
<?php
include ("./blog/wp-content/themes/v2/footer.php");
?>