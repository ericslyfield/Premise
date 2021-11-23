<?php

/**
* Quote Post Format
*
* @package Premise
*/

?>
<!-- The Featured Image -->
<div class="thumbnail">
    <?php the_post_thumbnail('large'); ?>
</div>

<!-- The Quote Post Content -->
<div class="content">
        <?php the_content(); ?>
</div>

<h6>
    <div class="quote-author">
        <!-- The Post Title -->
        <?php echo "— " ?><a href="<?php the_permalink();?>"><?php the_title(); ?></a>
    </div>
</h6>
