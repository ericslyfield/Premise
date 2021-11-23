<?php

/**
* Blog Page Template File
*
* @package Premise
*/

?>

<!-- Loads Header -->
<?php get_header();?>

<main>

    <article>

            <!-- Begin The Loop -->
            <?php if (have_posts()) : while( have_posts() ): the_post(); ?>

            <!-- Load Template Part Based on Post Type -->
            <?php get_template_part('template-parts/post/archive', get_post_format());?>

            <!-- End The Loop -->
            <?php endwhile; endif; ?>

    </article>

    <!-- Loads Pagination -->
    <nav class="pagination">

        <span> 
            <?php posts_nav_link(); ?> 
        </span>

    </nav>

</main>


<footer>
    <!-- Loads Footer -->
    <?php get_footer();?>
</footer>