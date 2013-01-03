<?php include('header.php') ?>

<div class="grid-8 hero main-content">
    <div id="post-area" class="grid-8 left" role="main">

    <?php if ( have_posts() ): ?>

    <?php if ( is_day() ) : ?>
    <h2>Archive: <?php echo  get_the_date( 'D M Y' ); ?></h2>
    <?php elseif ( is_month() ) : ?>
    <h2>Archive: <?php echo  get_the_date( 'M Y' ); ?></h2>
    <?php elseif ( is_year() ) : ?>
    <h2>Archive: <?php echo  get_the_date( 'Y' ); ?></h2>
    <?php else : ?>
    <h2>Archive</h2>
    <?php endif; ?>

    <ol>
    <?php while ( have_posts() ) : the_post(); ?>
        <li>
            <article>
                <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
                <?php the_content(); ?>
            </article>
        </li>
    <?php endwhile; ?>
    </ol>
    <?php else: ?>
    <h2>No posts to display</h2>
    <?php endif; ?>

    <div id="sidebar" class="grid-4 right" role="complementary">
        <?php if ( is_active_sidebar( 'v2_widgets')) { ?>
            <div id="sidebar-widget-area" class="sidebar-widget-area">
                <?php dynamic_sidebar( 'v2_widgets' ); ?>
            </div>
        <?php }  ?>
    </div>
</div>

<?php include ('footer.php') ?>