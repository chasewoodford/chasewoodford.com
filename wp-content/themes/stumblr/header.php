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
        <?php if ( is_active_sidebar( 'stumblr_widgets')) { ?>
        <div id="sidebar-widget-area">
        <?php dynamic_sidebar( 'stumblr_widgets' ); ?>
        </div>
        <?php }  ?>
    </div><!-- // stumblr-sidebar -->

