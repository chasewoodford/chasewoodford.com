<?php get_header(); ?>


<div id="post-area">

   	  	  <div id="post-<?php the_ID(); ?>" class="page type-post">
                            <div class="stumblr-title"><h1>Search Results</h1></div>

              <div class="stumblr-content">
                            
                          
           		 <?php if (have_posts()) : ?>
                 <ul>
                        <?php while (have_posts()) : the_post(); ?>
                        
                   <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            
                        <?php endwhile; ?>
            
                 </ul>
                    <?php else : ?>
                
                
                
                            <p>No Results</p>
                
                
                    <?php endif; ?>

              </div>
            
         
            
         
             
     <div class="clear"></div></div><!-- end page -->
       
       

</div>

    
    
 
<?php get_footer(); ?>
