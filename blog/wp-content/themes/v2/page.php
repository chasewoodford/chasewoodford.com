<?php if (have_posts()) : ?>
<div id="post-area" class="grid-8">
<?php while (have_posts()) : the_post(); ?>	


              		<?php the_content(); ?>


<?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>
