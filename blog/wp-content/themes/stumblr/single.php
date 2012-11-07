

<?php get_header(); ?>

<div id="post-area" class="grid-8">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>	

   	  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                 <div class="stumblr-meta">
                     <p>
                        <span class="stumblr-date">
                            <?php   the_time('F Y'); ?>
                        </span>
                        <span class="stumblr-category">
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
             </section>
<!--             <div class="title"><h1>--><?php //the_title(); ?><!--</h1></div>-->

<!--              <div class="content">-->
<!--              -->
<!--              -->
<!--                    --><?php //if ( has_post_thumbnail() ) { ?><!--<div class="stumblr-image">--><?php //the_post_thumbnail( 'stumblr-large-image' );  ?><!--</div>--><?php //} ?><!--  -->
<!--                          -->
<!--              		--><?php //the_content(); ?>
                    
                    <?php wp_link_pages(); ?>


                    <?php comments_template(); ?>


              </div>


         
             
	  <div class="clear"></div></div><!-- end post -->
       
       

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
    </div>

    
 
<?php get_footer(); ?>