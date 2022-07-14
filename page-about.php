<?php

/**
* Page Template File:
* Renders a Static Page Template File
*
* @package Premise
*/

?>

<header>
    <!-- Loads Header -->
    <?php get_header(); ?>
</header>

<main>

    <article>
        <?php get_template_part( 'template-parts/page/about' )?>
    </article>

</main>

<footer>
    <!-- Loads Footer -->
    <?php get_footer();?>
</footer>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>