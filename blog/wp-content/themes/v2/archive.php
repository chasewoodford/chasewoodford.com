<?php include('header.php') ?>

<div class="grid-8 hero main-content">
    <div id="post-area" class="grid-8 left" role="main">

        <article class="hero clearfix">
            <?php if ( have_posts() ): ?>
            <header>
                <h3>
                    <span class="blog-category clearfix">
                        <?php the_category(', ') ?>&nbsp;>
                    </span>
                    <?php if ( is_day() ) : ?>
                    Archive: <?php echo  get_the_date( 'D M Y' ); ?>
                    <?php elseif ( is_month() ) : ?>
                    Archive: <?php echo  get_the_date( 'M Y' ); ?>
                    <?php elseif ( is_year() ) : ?>
                    Archive: <?php echo  get_the_date( 'Y' ); ?>
                    <?php else : ?>
                    <h2>Archive</h2>
                </h3>
            </header>
            <?php endif; ?>

            <?php while ( have_posts() ) : the_post(); ?>
            <section class="content">
                <?php the_content(''); ?>
                <div class="clearfix"></div>
            </section>
            <?php endwhile; ?>
        </article>

        <?php else: ?>
        <?php endif; ?>

        <?php v2_pagination(); ?>
        <?php echo paginate_links( $args ) ?>
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