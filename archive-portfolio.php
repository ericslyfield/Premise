<?php

/**
* Portfolio Archive Template File:
* Renders a Portfolio Page Template File
*
* @package Premise
*/

?>



<header>
    <!-- Loads Header -->
    <?php get_header(); ?>
</header>

<!-- State Manager -->



<main>
    
<ul class="filter-options">
    <li class="ajax-filter-alpha"> <a data-filter="#" href="<?php echo $url; ?>"> Alphabetical </a></li>
    <li class="ajax-filter-chron"> <a data-filter="<?php echo $term[1]; ?>" href="#"> Chronological</a></li>
    <li class="ajax-filter-cat"> <a data-filter="<?php echo $term[0]; ?>" href="#"> Categorical </a></li>
</ul>

<div class="filter">

<?php
$url = esc_url(home_url( '/archives/portfolio'));
$urlChron = esc_url(home_url( '/archives/portfolio/chronological'));
$urlCat = esc_url(home_url( '/archives/portfolio/categorical'));

 // Stores Taxonomy Array
  $term = get_object_taxonomies('portfolio');

  $chronological = get_terms('year');

  $categorical = get_terms('medium');
  
  $terms = get_terms($term);

  $args = array(
      'post_type' => 'portfolio',
      'posts_per_page' => -1
  );

  $query = new WP_Query($args);

  if($query->have_posts()){
      while($query->have_posts()){
          $query->the_post();
      }
    }
    wp_reset_postdata();
?>
</div>

<div class="taxonomies">

    <?php 
    
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
    
    ?>

</div>


    <article>
        <div class="target-alpha show"><?php get_template_part( 'template-parts/page/index-alphabetical' ); ?></div>
    </article> 


    <div class="target">

<?php

    echo '<ul>';

    foreach ($terms as $term) {

    } if ( $term = 'year' ){

  echo '<br>';
  echo '<div class="target-chron hide">';

  get_template_part( 'template-parts/page/index-chronological' );

        foreach ($chronological as $chrono) {

        }

        echo '</div>';

    } if ($term = 'medium'){
        echo '<br>';

        echo '<div class="target-cat hide">';
        get_template_part( 'template-parts/page/index-categorical' );

        foreach ($chronological as $chrono) {

        }

        echo '</div>';

    } else {

        echo '<div class="target-alpha hide">';
        get_template_part( 'template-parts/page/index-alphabetical' );
    }
    echo '</div>';
    echo '</ul>';
          ?>

</div>

</main>

<footer>
    <!-- Loads Footer -->
    <?php get_footer();?>
</footer>