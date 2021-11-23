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

    <article class="post">

            <!-- Begin The Loop -->
            <?php if (have_posts()) : while( have_posts() ): the_post(); ?>

                <!-- Load Template Part Based on Post Type -->
                <?php get_template_part('template-parts/post/type', get_post_format());?>

            <!-- End The Loop -->
            <?php endwhile; endif; ?>

    </article>

    <!-- Loads Pagination -->
    <nav class="pagination"> 
        <span> 
            <?php previous_posts_link(); ?> 
        </span>
    </nav>

</main>

<!-- Loads Footer -->
<footer>
    <?php get_footer();?>
</footer>