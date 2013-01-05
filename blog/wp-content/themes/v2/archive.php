<?php include('header.php') ?>

<div class="grid-8 hero main-content">
    <div id="post-area" class="grid-8 left" role="main">

        <?php while ( have_posts() ): the_post(); ?>
        <article class="hero clearfix">
            <header>
                <h3>
                    <span class="blog-category clearfix">
                        <?php the_category(', ') ?>&nbsp;>
                    </span>
                    <a class="title-bar" href="<?php the_permalink() ?>" title="view full post"><?php the_title(); ?></a>
                </h3>
            </header>
            <section class="content">
                <!-- TODO: add responsive excerpt wrapper here -->
                <?php the_excerpt(); ?>
                <div class="clearfix"></div>
            </section>
        </article>

        <?php endwhile; ?>

    </div>

    <div id="sidebar" class="grid-4 right" role="complementary">
        <?php if ( is_active_sidebar( 'v2_widgets')) { ?>
            <div id="sidebar-widget-area" class="sidebar-widget-area">
                <?php dynamic_sidebar( 'v2_widgets' ); ?>
            </div>
        <?php }  ?>
    </div>
</div>

<?php include ('footer.php') ?>