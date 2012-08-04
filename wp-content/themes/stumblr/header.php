<!DOCTYPE html>
<!-- Stumblr WordPress Theme by Eleven Themes (http://www.eleventhemes.com) - Proudly powered by WordPress (http://wordpress.org) -->



<!-- meta -->
<html <?php language_attributes();?>> 
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('sitename'); ?> <?php wp_title(); ?></title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- styles -->
<!--<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>-->
<!--<link rel="stylesheet" type="text/css" media="all" href="--><?php //echo get_template_directory_uri(); ?><!--/css/reset.css" />-->

<?php  $options = get_option('plugin_options');
    $stumblr_color_scheme = $options['stumblr_color_scheme'];
    $stumblr_logo = $options['stumblr_logo'];
    $stumblr_show_title = $options['stumblr_show_title'];
    $stumblr_highlight_color = $options['stumblr_highlight_color'];
?>			

<?php //if ($stumblr_color_scheme == 'custom') { ?>
<!--	<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/css/custom.css"/> -->
<?php // } elseif ($stumblr_color_scheme == 'minimal') {  ?>
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/css/minimal.css"/> -->
<?php // } else {?>
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/css/light.css"/> -->
<?php // } ?>


<?php //if ($stumblr_show_title == 'no') { ?><!--<style type="text/css"> .stumblr-title { display:none;}</style>--><?php // } ?><!-- -->
<?php if ($stumblr_highlight_color != '') { ?><style type="text/css"> a:hover { color:<?php echo $stumblr_highlight_color; ?>; }  .side-widget ul li a:hover { color:<?php echo $stumblr_highlight_color; ?>; }   .footer-widget ul li a:hover { color:<?php echo $stumblr_highlight_color; ?>; }  </style><?php  } ?>

 
    
<!-- wp head -->
<?php wp_head(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>


<body <?php body_class(); ?>>
	
<div id="wrap">
	<div id="stumblr-sidebar">
        
    	<div id="logo">
        	<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php if ($stumblr_logo != '') {?><img src="<?php echo $stumblr_logo; ?>" alt="<?php bloginfo('sitename'); ?>"><?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/light/logo.png" alt="<?php bloginfo('sitename'); ?>" width="200"><?php } ?>
           </a>
       </div>
        
        
<?php if ( is_active_sidebar( 'stumblr_widgets')) { ?>     
<div id="sidebar-widget-area">
<?php dynamic_sidebar( 'stumblr_widgets' ); ?>
</div>
<?php }  ?>     
</div><!-- // stumblr-sidebar -->           

