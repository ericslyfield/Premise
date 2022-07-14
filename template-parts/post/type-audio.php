<?php

/**
* Audio Post Format
*
* @package Premise
*/

?>

<h2>

	<div class="title xx-large">
		<!-- The Post Title -->
		<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	<div>
</h2>

<!-- The Date -->
<div class="date small">
	<?php the_time('F j, Y'); ?>
</div>

<!-- The Featured Image -->
<div class="thumbnail">
    <?php the_post_thumbnail('large'); ?>
</div>
  
<br>

<!-- The Audio Post Content -->
<div class="content">
        
        <!-- <?php
		$content = do_shortcode( apply_filters('the_content', $post->post_content));
		$embed = get_media_embedded_in_content($content, array('audio', 'iframe'));
		
		echo str_replace( '?visual=true', '?visual=false', $embed[0] );
		?> -->


    <?php the_content(); ?>

</div>
