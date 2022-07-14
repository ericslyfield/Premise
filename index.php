<?php

/**
* Main Template File
*
* @package Premise
*/

?>

<head>

    <!-- Dynamically Loads Scripts Into Header -->
    <?php wp_head(); ?>

</head>

<?php

//Get all the Tax Terms from DB
$taxonomies = array(
    'post_type' => 'portfolio',
    'tax_query' => array(
            array(
                'taxonomy' => 'year',
                'field' => 'slug',
                'terms' => $category->slug,
            ),
            array(
                'taxonomy' => 'medium',
                'field' => 'slug',
                'terms' => $category->slug,
            ),
),
);

// Stores Taxonomy Array
$terms = get_terms($taxonomies);



$yearName = $year->name;
$yearSlug = $year->slug;
$yearID = $year->term_id;

$categories = get_terms( array(
    'taxonomy' => 'year',
) );

// Sorts Year Taxonomy In Reverse Order
krsort($categories, SORT_NUMERIC);

$mediums = get_terms( array(
    'taxonomy' => 'medium',
) );

foreach ( $categories as $category ) {
    
    echo '<h2 class="year-heading">' . $category->name . '</h2>';


    foreach ( $mediums as $medium ) {
        $query = new WP_Query( array(
            'post_type' => 'portfolio',
            'tax_query' => array(
                array(
                    'terms'    => $category->term_id,
                    'taxonomy' => 'year',
                ),
                array(
                    'terms'    => $medium->term_id,
                    'taxonomy' => 'medium',
                ),
            ),
        ) );

        if( $query->have_posts() ) {

            echo '<div class="' . $yearID . '"><a href="">';
    
            echo '<h3 class="tax-title">' . $year->name . '</h3>';

            // echo '<div class="box-location">' . $medium->name . '</div>';

            while ( $query->have_posts() ) : $query->the_post();

            // echo '<div class="glossary-title"><a href="';
            // echo 	the_permalink();
            // echo '">';
            // echo ''. get_the_title() .'';
            // echo '</a>';
            // echo '<br>';

                echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a><br>';
            endwhile;
        }

        wp_reset_postdata();
    }
}

?>

<?php
    //Get all the Tax Terms from DB
    $taxonomies = array(
        'post_type' => 'portfolio',
        'tax_query' => array(
                array(
                    'taxonomy' => 'year',
                    'field' => 'slug',
                    'terms' => $category->slug,
                ),
                array(
                    'taxonomy' => 'medium',
                    'field' => 'slug',
                    'terms' => $category->slug,
                ),
    ),
    );

    // Stores Taxonomy Array
    $term = get_object_taxonomies('portfolio');

    // echo '<pre>';
    print_r ($term);

    $name = get_term_link('medium');
    $slug = $term->slug;
    $ID = $term->term_id;

    print_r($name);
    print_r($slug);
    print_r($ID);

    foreach($term as $link) :
        if ($link == 'medium') {
            


        } elseif ($link == 'year'){
            
        } else {
            return;
        }
            ?>
        <li class="ajax-filter"><a href="<?php get_term_link($link->name); ?>"> <?php get_term_link($link->name); ?> </a></li>
    <?php endforeach; ?>



<!-- Loads Footer File -->
<footer> 
    <?php get_footer(); ?> 
</footer>