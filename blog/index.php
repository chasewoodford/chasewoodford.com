<?php
$posts = get_posts('numberposts=10&order=DSC&orderby=post_title');
foreach ($posts as $post) : start_wp(); ?>
<?php the_date(); echo "<br />"; ?>
<?php the_title(); ?>
<?php the_excerpt(); ?>
<?php
endforeach;
?>