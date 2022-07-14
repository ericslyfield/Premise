<?php

/**
* Blog Page Template File
*
* @package Premise
*/

?>

<br>
<br>
<br>

<?php 
	if (have_posts()) : 
	while( have_posts()): the_post(); ?>

		<div class="thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>
           
        <div class="content quarters">
		<div class="home-wrap">

				<?php the_content(); ?>
        </div>
		</div>
		
<?php endwhile; else: endif; ?>

	<nav class="postnav small bold">
        <?php posts_nav_link($sep = '*', $prelabel = '< Newer', $nxtlabel = 'Older >'); ?>
	</nav>