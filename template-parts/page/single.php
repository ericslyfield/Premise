<article class="post">

    <!-- Category -->
    <div class="category up small">
        <a href="<?php the_permalink();?>"><?php $subcategory = new singleSubcategory(); ?></a>
    </div>

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
    <div class="time small">
	    <?php the_time('H:i:s'); ?>
    </div>

    <br>

        <?php 
            if (have_posts()) : 
            while( have_posts()): the_post(); ?>

    <?php

        $postID = get_the_ID();

        if ((get_the_category($post->ID)[0]->name) == 'Audio') {

            echo '<div class="content">';

                the_content(); 
    
            echo '</div>';

        }else if ((get_the_category($post->ID)[0]->name) == 'Video'){
       
        echo    '<div class="content">
                <div class="videowrapper">';
                
                the_content(); 
                
        echo    '</div>
                </div>';
       
       } else {

        echo   '<div class="over-wrapper">';

        echo '<div class="thumbnail">';
        the_content();
        echo '</div>';

        echo   '<div class="meta-wrapper">'; 



                    $edition = get_post_meta($post->ID, '_artwork_edition_key', true);
                    $year = get_post_meta($post->ID, '_artwork_year_key', true);
                    $dimensions = get_post_meta($post->ID, '_artwork_dimensions_key', true);
                    $medium = get_post_meta($post->ID, '_artwork_medium_key', true);
                    $material = get_post_meta($post->ID, '_artwork_material_key', true);
                    $description = get_post_meta($post->ID, '_artwork_description_key', true);

                    if($edition){
                        echo '<p class="meta-id bold up sm-pad">';
                        echo ' Edition: ';
                        echo '</p>';
                        echo '<p class="meta-info sm-pad">';
                        echo($edition);
                        echo '</p>';
                        
                    } if ($year) {
                        echo '<p class="meta-id bold up sm-pad">';
                        echo ' Year: ';
                        echo '</p>';
                        echo '<p class="meta-info sm-pad">';
                        echo($year);
                        echo '</p>';
                        

                    } if ($medium) {
                        echo '<p class="meta-id bold up sm-pad">';
                        echo ' Medium: ';
                        echo '</p>';
                        echo '<p class="meta-info sm-pad">';
                        echo($medium);
                        echo '</p>';
                        

                    } if ($dimensions) {
                        echo '<p class="meta-id bold up sm-pad">';
                        echo ' Dimensions: ';
                        echo '</p>';
                        echo '<p class="meta-info sm-pad">';
                        echo($dimensions);
                        echo '</p>';
                        

                    } if ($material) {
                        echo '<p class="meta-id bold up sm-pad">';
                        echo ' Material: ';
                        echo '</p>';
                        echo '<p class="meta-info sm-pad">';
                        echo($material);
                        echo '</p>';
                        

                    } if ($description) {
                        echo '<p class="meta-id bold up sm-pad">';
                        echo ' Description: ';
                        echo '</p>';
                        echo '<p class="meta-info sm-pad">';
                        echo($description);
                        echo '</p>';
                        

                    }  else {
                        return;
                    }

        echo   '</div>';

        echo   '</div>';
       
       }; ?>

        <?php endwhile; else: endif; ?>

</article>

<div class="postnav-container">
    <nav class="postnav medium bold left textleft">
        <?php previous_post_link(); ?>
    </nav>

    <nav class="postnav medium bold right textright">
    <?php next_post_link(); ?>
    </nav>
</div>
