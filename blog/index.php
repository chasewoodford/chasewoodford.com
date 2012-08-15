<?php
define('WP_USE_THEMES', true);
require('../wp-blog-header.php');
?>

<?php query_posts('showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><br />
<?php endwhile;?>