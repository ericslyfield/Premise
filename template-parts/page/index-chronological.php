<div class="content">

<?php

//Get all the Tax Terms from DB
$taxonomies = get_terms( 'year', array (
    'taxonomy' => 'year',
    'order' => 'DESC') );

// Stores Taxonomy Array
$terms = get_terms($args);


$categories = get_terms( array(
    'taxonomy' => 'year',
) );

// Sorts Year Taxonomy In Reverse Order
krsort($categories, SORT_NUMERIC);


foreach($categories as $category) {
    wp_reset_query();
    $args = array('post_type' => 'portfolio',
        'tax_query' => array(
            array(
                'taxonomy' => 'year',
                'field' => 'slug',
                'terms' => $category->slug,
            ),
        ),
     );

     $query = new WP_Query($args);
     if($query->have_posts()) {
        echo '<h2>'.$category->name.'</h2>';

        while($query->have_posts()) : $query->the_post();
            echo '<a href="'.get_permalink().'">'.get_the_title().'</a><br>';
        endwhile;
     }

     echo '<br>';
     
     wp_reset_postdata();
}

?>

</div>