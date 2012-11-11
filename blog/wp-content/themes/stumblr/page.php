

<?php get_header(); ?>


<?php if (have_posts()) : ?>
<div id="post-area" class="grid-8">
<?php while (have_posts()) : the_post(); ?>	

   	  	  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="title"><h1><?php the_title(); ?></h1></div>

              <div class="content">
                            
                    <?php if ( has_post_thumbnail() ) { ?><div class="stumblr-image"><?php the_post_thumbnail( 'stumblr-large-image' );  ?></div><?php } ?>  
                          
              		<?php the_content(); ?>
                    
                    <?php wp_link_pages(); ?>

   
					<?php comment_form(); ?> 



              </div>
            
          
            
         
             
    <div class="clear"></div> </div><!-- end post -->
       
       

<?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>
    
    
 
<?php get_footer(); ?>