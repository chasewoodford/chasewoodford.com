	

<?php if ( is_active_sidebar( 'stumblr_footer')) { ?>     
   <div id="footer-area">
			<?php dynamic_sidebar( 'stumblr_footer' ); ?>
        </div><!-- // footer area -->   
<?php }  ?>     
      

<footer>
     <div id="copyright" role="contentinfo">
        <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>&nbsp;&#8226;&nbsp;RSS</p>
     </div>
     <div>
         <a href="https://twitter.com/chase1263070" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @chase1263070</a>
     </div>
</footer>
     
</div>
</body>
</html>