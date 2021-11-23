<?php

/**
* Root Home Page Template File
*
* @package Premise
*/

?>

    <header>
    <!-- Loads Header -->
    <?php get_header(); ?>
    </header>

    <main>

    <?php if (have_posts()) : while( have_posts() ): the_post(); ?>

        <!-- Loads Home Page Content -->
        <article class="post">
            
		<!-- Category -->
		<div class="category up small">
			<a href="<?php the_permalink();?>"><?php $subcategory = new singleSubcategory(); ?></a>
		</div>

		<!-- Dynamic Post Loader -->
		<?php get_template_part('template-parts/post/type', get_post_format());?>

        <article>

        <!-- Dotted Line Break  -->
		<hr class="dotted-break">

        <?php endwhile; else: endif; ?>

        <nav class="postnav">
        <?php posts_nav_link($sep = '', $prelabel = '< Newer', $nxtlabel = 'Older >'); ?>
        
    </main>
    
    <br>

<footer>
    <!-- Loads Footer -->
    <?php get_footer();?>
</footer>