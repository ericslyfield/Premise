<?php

/**
* Blog Page Template File
*
* @package Premise
*/

?>


<body>

<?php if (have_posts()) : while( have_posts() ): the_post(); ?>

		<!-- Category -->
		<div class="category up">
			<a href="<?php the_permalink();?>"><?php $subcategory = new singleSubcategory(); ?></a>
		</div>

		<!-- Dynamic Post Loader -->
		<?php get_template_part('template-parts/post/type', get_post_format());?>

		<!-- Dotted Line Break  -->
		<hr class="dot-break">

<?php endwhile; endif; ?>


<?php
	function your_themes_pagination(){
		global $wp_query; 
		echo paginate_links();
	}
?>

</body>