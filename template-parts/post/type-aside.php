<?php

/**
* Image Post Format
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
  
<br>

<!-- The Aside Post Content -->
<div class="content">
    <?php the_content(); ?>
</div>