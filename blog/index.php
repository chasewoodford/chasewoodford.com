<!DOCTYPE html>
<html>
<head>
    <title>Blog &#124; Chase Woodford</title>
</head>
<body>
<?php
// Include WordPress
define('WP_USE_THEMES', false);
require('../wordpress/wp-load.php');
query_posts('showposts=1');
?>

<?php while (have_posts()): the_post(); ?>

    <?php endwhile; ?>
</body>
</html>