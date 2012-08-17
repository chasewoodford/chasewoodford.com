	

<?php if ( is_active_sidebar( 'stumblr_footer')) { ?>     
   <div id="footer-area">
			<?php dynamic_sidebar( 'stumblr_footer' ); ?>
        </div><!-- // footer area -->   
<?php }  ?>     
      


 <div id="copyright">
    <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>&nbsp;&#8226;&nbsp;RSS</p>
 </div>
 <div>
     <a href="https://twitter.com/chase1263070" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @chase1263070</a>
 </div>
     
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	
</body>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</html>