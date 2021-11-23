<?php

/**
* Video Post Format
*
* @package Premise
*/

?>

<div class="grid">
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

    <!-- The Featured Image -->
    <div class="thumbnail">
        <?php the_post_thumbnail('large'); ?>
    </div>
    
    <br>

    <!-- The Video Post Content -->
    <div class="content">
        
            <!-- <?php the_content(); ?> -->
        <div class="videowrapper">
            <div class="videoplayer">
                <?php
                    $content = do_shortcode( apply_filters('the_content', $post->post_content));
                    $embed = get_media_embedded_in_content($content, array('video', 'embed', 'iframe'));
                                
                    echo $embed[0]; 
                ?>
            </div>
        </div>
    </div>
</div>
