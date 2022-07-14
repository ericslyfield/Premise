<?php

/**
* Single Artwork Page Template File:
* Renders a Single Project Page Template File
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
        <?php get_template_part( 'template-parts/page/single' )?>
    </article>

</main>