<?php

/**
* Audio Post Format
*
* @package Premise
*/

?>

<!-- The Link Post Content -->
<div class="content">
    <!-- Displays The First link in a Post As The Hyperlinked Title -->
    <h2><a href=" <?php echo get_url_in_content(get_the_content())?>" target="_blank"> <?php the_title(); ?> </a></h2>
</div>