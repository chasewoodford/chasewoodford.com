<?php include('header.php') ?>

<div class="grid-8 hero main-content">
    <div id="post-area" class="grid-8 left" role="main">
        <?php
        if ( is_home() ) {
            query_posts( 'cat=-10&orderby=post_date&order=DESC' );
        }
            while ( have_posts() ) : the_post();
        ?>
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
                <?php the_excerpt(); ?>
                <div class="clearfix"></div>
                <div class="metadata">
                        <span class="left">
                            <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F Y'); ?></time>
                        </span>
                        <span class="left">
                            <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                                foreach($posttags as $tag) {
                                    echo '<a href="';echo bloginfo(url);echo '/?tag=' . $tag->slug . '">' . $tag->name . '</a>&nbsp;&nbsp;';
                                }
                            }
                            ?>
                        </span>
                        <span class="right">
                            <?php if (get_comments_number() > 0) { ?>
                                <a href="<?php comments_link(); ?>">comments:&nbsp;<?php $commentscount = get_comments_number(); echo $commentscount; ?></a>
                            <?php } else { ?>
                                <a href="<?php comments_link(); ?>">post a comment</a>
                            <?php } ?>
                        </span>
                </div>
            </section>
        </article>

        <?php endwhile; ?>
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