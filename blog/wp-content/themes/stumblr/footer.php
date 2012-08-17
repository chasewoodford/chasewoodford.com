	

<?php if ( is_active_sidebar( 'stumblr_footer')) { ?>     
   <div id="footer-area">
			<?php dynamic_sidebar( 'stumblr_footer' ); ?>
        </div><!-- // footer area -->   
<?php }  ?>     
      


 <div id="copyright">
    <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>&#8226;RSS</p>
 </div><!-- // copyright -->   
     
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	
</body>
</html>