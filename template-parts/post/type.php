<?php

/**
* Standard Post Format
*
* @package Premise
*/

?>

<h2>
    <div class="title xx-large">
        <!-- The Post Title -->
        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
    </div>
</h2>
			
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

<!-- The Post Content -->
<div class="content">
    <?php the_content(); ?>
</div>