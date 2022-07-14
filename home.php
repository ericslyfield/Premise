<?php

/**
* Blog Post Template File:
*
* @package Premise
*/

?>

<header>
    <!-- Loads Header -->
    <?php get_header(); ?>

    <script>
        container = document.getElementById("#");

        cont text = new Blotter.Text()
    </script>

</header>

<br>
<br>
<br>

<main id="main" class="blur-out">

    <?php if (have_posts()) : while( have_posts() ): the_post(); ?>

    <!-- Loads Home Page Content -->
    <article class="post">
            
        <!-- Category -->
        <div class="category up small bold">
            <a href="<?php the_permalink();?>"><?php $subcategory = new singleSubcategory(); ?></a>
        </div>

        <div class="content">
            <!-- Dynamic Post Loader -->
            <?php get_template_part('template-parts/post/type', get_post_format());?>
        </div>

        <!-- Dotted Line Break  -->
        <hr class="dotted-break">

    <?php endwhile; else: endif; ?>

    <div class="postnav medium bold">
        <?php posts_nav_link($sep = ' &nbsp; ', $prelabel = '< Newer', $nxtlabel = 'Older >'); ?>
    </div>

    </article>

</main>

<footer>
    <!-- Loads Footer -->
    <?php get_footer();?>
</footer>