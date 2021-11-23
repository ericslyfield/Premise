<?php

/**
* Page Template File:
* Renders a Static Page Template File
*
* @package Premise
*/

?>

<body>
			<br>
            <br>
			<br>
            <br>
			<div class="thumbnail">
			<br>
            <br>
				<?php the_post_thumbnail('large'); ?>
			</div>

            <br>
           
            <div class="content">
				<div class="content-container">
					<?php the_content(); ?>
				</div>
            </div>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>