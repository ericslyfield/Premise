<?php

add_action('wp_ajax_nopriv_sort', 'sortAjax');
add_action('wp_ajax_sort', 'sortAjax');

function sortAjax(){

    $filter = $_POST['filter'];

    // Stores Taxonomy Array
    $term = get_object_taxonomies('portfolio');

    $chronological = get_terms('year');

    $categorical = get_terms('medium');
  
    $terms = get_terms($term);

    $sortArgs = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'year',
                'field' => 'slug',
                'terms' => 'year',
            ),
            array(
                'taxonomy' => 'medium',
                'field' => 'slug',
                'terms' => 'medium',
            ),

        )
    );

    $taxonomies = get_object_taxonomies($sortArgs);
  

    if(isset($taxonomies)) {
        $args['category__in'] = array($sortArgs);
    }
    
    $query = new WP_Query($args);

 if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post(){
                the_title('<h2>', '</h2>')
            };
        }
      }
      wp_reset_postdata();
     
     wp_reset_postdata();
    

    die();

}