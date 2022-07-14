<body>

<?php if (have_posts()) : 
	while( have_posts()): the_post(); ?>

    <div class="about-container">
           
        <div id="content" class="content">
			<div class="content-container">
				<?php the_content(); ?>
			</div>
        </div>

		<div id="thumb" class="thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>

    </div>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>

<?php endwhile; else: endif; ?>