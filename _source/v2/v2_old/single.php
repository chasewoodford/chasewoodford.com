<?php get_header(); ?>

<div class="grid-8">
    <div id="post-area" class="grid-blog">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

   	    <article class="hero post type-post">
            <header>
                <h3 class="title-background">
                    <a class="post-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <span class="blog-category" style="">
                        <?php the_category(', ') ?>
                    </span>
                </h3>
            </header>
            <section class="content">
                <?php the_content(''); ?>
                <?php wp_link_pages(); ?>
                <?php comments_template(); ?>
                    <div class="v2-meta">
                        <p>
                            <span class="v2-date">
                                <?php   the_time('F Y'); ?>
                            </span>
                            <span class="v2-category">
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach($posttags as $tag) {
                                        echo '<a href="';echo bloginfo(url);echo '/?tag=' . $tag->slug . '" class="no-shadow">' . $tag->name . '</a>&nbsp;&nbsp;';
                                    }
                                }
                                ?>
                            </span>
                        </p>
                    </div>
                </div>
            </section>
            <div class="clear"></div>
        </article>

        <?php endwhile; ?>

        <?php else : ?>
        <?php endif; ?>

    </div>

    <div id="sidebar" class="grid-2">
        <?php if ( is_active_sidebar( 'v2_widgets')) { ?>
        <div id="sidebar-widget-area">
            <?php dynamic_sidebar( 'v2_widgets' ); ?>
        </div>
        <?php }  ?>
    </div>
</div>

<?php
include ("footer.php");
?>