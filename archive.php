<?php

/**
* Blog Page Template File
*
* @package Premise
*/

?>

<header>
    <!-- Loads Header -->
    <?php get_header(); ?>
</header>

<main>

    <article class="post">



            <!-- Begin The Loop -->
            <?php if (have_posts()) : while( have_posts() ): the_post(); ?>

            <!-- Category -->
            <div class="category up small bold">
                <a href="<?php the_permalink();?>"><?php $subcategory = new singleSubcategory(); ?></a>
            </div>

                <!-- Load Template Part Based on Post Type -->
                <?php get_template_part('template-parts/post/type', get_post_format());?>

                <!-- Dotted Line Break  -->
		        <hr class="dotted-break">

            <!-- End The Loop -->
            <?php endwhile; endif; ?>

    <!-- Loads Pagination -->
    <nav class="postnav medium bold">
            <?php posts_nav_link($sep = ' - ', $prelabel = '< Newer', $nxtlabel = 'Older >'); ?>
    </nav>

    </article>

</main>

<!-- Loads Footer -->
<footer>
    <?php get_footer();?>
</footer>