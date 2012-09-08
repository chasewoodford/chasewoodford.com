<?php get_header(); ?>

<div id="post-area">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>	

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="title"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
			<div class="content">
            	<?php if ( has_post_thumbnail() ) { ?><div class="stumblr-image"><?php the_post_thumbnail( 'stumblr-large-image' );  ?></div><?php } ?>  
                 <?php the_content(''); ?>
             </div>
            
            <div class="stumblr-meta">
                <p>
                    <span class="stumblr-date"><?php the_time('F Y'); ?></span>
                    <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo '<a href="';echo bloginfo(url);echo '/?tag=' . $tag->slug . '" class="no-shadow">' . $tag->name . '</a>&nbsp;&nbsp;';
                        }
                    }
                    ?>
                </p>
            </div>
	<div class="clear"></div></div><!-- end post -->

<?php endwhile; ?>

<?php else : ?>
<?php endif; ?>
    
<?php stumblr_pagination(); ?>
<?php echo paginate_links( $args ) ?>

</div>

<?php
include ("footer.php");
?>