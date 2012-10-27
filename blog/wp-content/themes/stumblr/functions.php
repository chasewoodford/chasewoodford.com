<?php
   
	// Add RSS links to <head> section
	add_theme_support('automatic-feed-links') ;
	
	// Load jQuery
	if ( !function_exists('core_mods') ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"));
				wp_register_script('stumblr.functions', (get_template_directory_uri()."/js/functions.js"),'jquery',false,true);
				
				wp_enqueue_script('jquery');
				wp_enqueue_script('stumblr.functions');
			}
		}
		core_mods();
	}
	
	// content width
	if ( !isset( $content_width ))  {
		$content_width = 700; 
	}


	// clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Stumblr post thumbnails
	add_theme_support( 'post-thumbnails' );
		add_image_size('stumblr-large-image', 740, 9999);
	
	
	// menu fallback
	
	function stumblr_addmenus() {
	register_nav_menus(
		array(
			'main_nav' => 'Main Menu',
			)
			);
	}

	add_action( 'init', 'stumblr_addmenus' );
	
	function stumblr_nav() {
		if ( function_exists( 'wp_nav_menu' ) )
			wp_nav_menu( 'menu=main_nav&container_class=pagemenu&fallback_cb=stumblr_nav_fallback' );
		else
			stumblr_nav_fallback();
	}
	
	function stumblr_nav_fallback() {
		echo '<li><a href="';
		echo home_url( '/' ); 
		echo '">Home</a></li>';
		wp_list_pages("depth=1&title_li=");
	}

     //setup footer widget area
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Side Widgets',
    		'id'   => 'stumblr_widgets',
    		'description'   => 'Side Widget Area',
    		'before_widget' => '<div id="%1$s" class="side-widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
		
		register_sidebar(array(
    		'name' => 'Footer Widgets',
    		'id'   => 'stumblr_footer',
    		'description'   => 'Footer Widget Area',
    		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
		
	}


  // video width
	 
	add_filter('embed_defaults', 'custom_embed_defaults');
	function custom_embed_defaults($embed_size) {
		if (is_single()) { // Conditionally set max height and width
			$embed_size['width'] = 740;
			$embed_size['height'] = 740;
		} else {           // Default values
			$embed_size['width'] = 740;
			$embed_size['height'] = 740;
		}
		return $embed_size; // Return new size
	}
 



   // pagination
   
  function stumblr_pagination($pages = '', $range = 2) {  
     $showitems = ($range * 2)+1;  
	 
     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='stumblr-pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
	}

    // Custom read more link after excerpt
    function new_excerpt_more($more) {
        global $post;
        return '... <br/><a class="no-shadow continue-reading inline" href="'. get_permalink($post->ID) . '" title="View full post">continue reading &#187;</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

?>