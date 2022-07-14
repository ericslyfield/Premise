<div class="content">

<?php 

$this_char = '';
$last_char = '';
$numeric = '#';


$args = array(
  'orderby' => 'title',
  'order' => 'ASC',
  'posts_per_page'=> -1,
  'post_type' => 'portfolio'
);

$query = new WP_Query($args);



if ($query->have_posts()) :

	while ($query->have_posts()) : $query->the_post();

	    $this_char = mb_strtoupper(mb_substr($post->post_title,0,1));

	    // Numerics Loop

	    if (is_numeric($this_char)) {

	    } elseif (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]1234567890/', $this_char)) {

			echo '<br>';
			echo '<h2>';
			echo '' . $numeric .'';
			echo '</h2>';
	

	    } elseif ($this_char != $last_char) {

		      $last_char = $this_char;

		      echo '<br>';
		      echo '<h2>';
		      echo '' . $last_char .'';
		      echo '</h2>';

	    } else ($last_char = $this_char);

	    // Item Called Into List

	    echo '<div class="glossary-title"><a href="';
	    echo 	the_permalink();
	    echo '">';
	    echo ''. get_the_title() .'';
	    echo '</a>';
	    echo '<br>';


	endwhile;
endif;

wp_reset_query(); ?>

<!-- End Query -->

</div>
<br>
