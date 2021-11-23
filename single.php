<?php

/**
* Single Page Template File:
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
        <?php get_template_part( 'template-parts/page/default' )?>
    </article>

</main>