<!DOCTYPE html>
<html>
<head>
	<title>comicsans-serif.com</title>
</head>
<body style="margin: 0;padding: 5em 10em;background: #474747;">
	<?php 
		define(‘WP_USE_THEMES’, false);
		require('../wordpress/wp-blog-header.php'); 
    ?>  		
	<div style="text-align: center;margin: 0 auto 2em auto;">
		<h1 style="margin: 0;padding: 0;color: #222;font-family: 'Comic Sans MS';font-weight: bold;font-size: 3em; /* 48px / 16px */text-shadow: 0px 2px 1px #555;text-align: center;">
			Comic Sans walks into a bar and the barman says, "We don’t <span style="text-shadow: 0px 1px 1px rgba(0,136,204,0.6);">server</span> your <span style="text-shadow: 0px 1px 1px rgba(0,136,204,0.6);">type</span> here."
		</h1>
		<h2 style="margin: 0;padding: 0;color: #222;font-family: 'Comic Sans MS';font-weight: bold;font-size: 3em; /* 48px / 16px */text-shadow: 0px 2px 1px #555;text-align: center;margin-top: -.5em; /* 8px / 16px */font-size: 1.5em; /* 24px / 16px */"></h2>
	</div>
	<div>
			
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="post" id="post-<?php the_ID(); ?>">
		 
		<?php comments_template(); // Get wp-comments.php template ?>

	</div>

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

	</div>
</body>
</html>