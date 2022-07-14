<?php

/**
* Blog Page Template File
*
* @package Premise
*/

?>

<?php 
	if (have_posts()) : 
	while( have_posts()): the_post(); ?>

		<div class="thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>
           
        <div class="content">
				<?php the_content(); ?>
        </div>
<?php endwhile; else: endif; ?>

<nav class="postnav medium bold">
	<?php posts_nav_link($sep = '', $prelabel = '< Newer', $nxtlabel = 'Older >'); ?>
</nav>