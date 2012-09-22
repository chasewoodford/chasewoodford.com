

<?php get_header(); ?>

<div id="post-area">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>	

   	  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="title"><h1><?php the_title(); ?></h1></div>

              <div class="content">
              
              
                    <?php if ( has_post_thumbnail() ) { ?><div class="stumblr-image"><?php the_post_thumbnail( 'stumblr-large-image' );  ?></div><?php } ?>  
                          
              		<?php the_content(); ?>
                    
                    <?php wp_link_pages(); ?>

                    <?php if (in_category('poetry')) : ?>


              </div>
            
            <div class="stumblr-meta">
            	<p><?php the_tags(); ?></p>
                <p><span class="stumblr-date"><?php the_time(get_option('date_format')); ?></span> <span class="stumblr-category"> <?php the_category(', ') ?></span></p>
            </div>

         
             
	  <div class="clear"></div></div><!-- end post -->
       
       

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
    </div>

    
 
<?php get_footer(); ?>