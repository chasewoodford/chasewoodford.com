<?php  $options = get_option('plugin_options');
    $stumblr_color_scheme = $options['stumblr_color_scheme'];
    $stumblr_logo = $options['stumblr_logo'];
    $stumblr_show_title = $options['stumblr_show_title'];
    $stumblr_highlight_color = $options['stumblr_highlight_color'];
?>			

<?php if ($stumblr_highlight_color != '') { ?><style type="text/css"> a:hover { color:<?php echo $stumblr_highlight_color; ?>; }  .side-widget ul li a:hover { color:<?php echo $stumblr_highlight_color; ?>; }   .footer-widget ul li a:hover { color:<?php echo $stumblr_highlight_color; ?>; }  </style><?php  } ?>

 
    
<!-- wp head -->
<?php wp_head(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>


<body <?php body_class(); ?>>
	
<div id="wrap">
	<div id="stumblr-sidebar">

<!--    	<div id="logo">-->
<!--        	<a href="--><?php //echo home_url( '/' ); ?><!--"  title="--><?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><!--" rel="home">-->
<!--				--><?php //if ($stumblr_logo != '') {?><!--<img src="--><?php //echo $stumblr_logo; ?><!--" alt="--><?php //bloginfo('sitename'); ?><!--">--><?php //} else { ?><!--<img src="--><?php //echo get_template_directory_uri(); ?><!--/images/light/logo.png" alt="--><?php //bloginfo('sitename'); ?><!--" width="200">--><?php //} ?>
<!--           </a>-->
<!--       </div>-->


<?php if ( is_active_sidebar( 'stumblr_widgets')) { ?>
<div id="sidebar-widget-area">
<?php dynamic_sidebar( 'stumblr_widgets' ); ?>
</div>
<?php }  ?>
</div><!-- // stumblr-sidebar -->

