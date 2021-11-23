<body>

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


	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>

<?php endwhile; else: endif; ?>