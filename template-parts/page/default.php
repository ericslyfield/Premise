<?php if (have_posts()) : 
	while( have_posts()): the_post(); ?>

			<div class="thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
           
            <div class="content">
				<div class="content-container">
					<?php the_content(); ?>
				</div>
            </div>


	    <nav class="postnav">
        	<?php posts_nav_link($sep = '', $prelabel = '< Newer', $nxtlabel = 'Older >'); ?>
		</nav>

<?php endwhile; else: endif; ?>