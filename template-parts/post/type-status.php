<?php

/**
* Status Post Format
*
* @package Premise
*/

?>
			
<!-- The Date --> 
<div class="date small">
	<?php the_time('F j, Y'); ?>
</div>	

<!-- The Time (Hours:Minutes:Seconds) -->
<div class="time">
	<?php the_time('H:i:s'); ?>
</div>

<!-- The Featured Image -->
<div class="thumbnail">
    <?php the_post_thumbnail('large'); ?>
</div>

<!-- The Status Post Content -->
<div class="content">
    <div class="status">
        <?php echo substr(strip_tags($post->post_content), 0, 141);?>
    </div>
</div>