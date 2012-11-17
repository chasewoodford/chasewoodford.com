<?php
require('./blog/wp-blog-header.php');
?>

<?php get_header(); ?>

<div class="grid-8">
    <div id="post-area" class="grid-blog">
        <article class="hero post type-post">
            <section class="content">
                <script>
                    (function() {
                        var cx = '001111473829683533715:pmw2lbmd7y0';
                        var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
                        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                            '//www.google.com/cse/cse.js?cx=' + cx;
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
                    })();
                </script>
                <gcse:search></gcse:search>
            </section>
            <div class="clear"></div>
        </article>
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
include ("./blog/wp-content/themes/v2/footer.php");
?>