<?php

/**
* Header Template
*
* @package Premise
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title> <?php get_the_title(); ?> </title>

    <?php wp_head(); ?>

</head>

<!-- Displays Class Names for the Body Element -->
<body <?php body_class(); ?> >

    <!-- Allows for the Insertion of Asynchronous JS -->
    <?php 
    
    if (function_exists ( 'wp_body_open' ) ){
        wp_body_open();
    } else {
        do_action ( 'wp_body_open' );
    };

    ?>


    <!-- Navigation Wrapper -->
    <div class="navigation bold show-nav" >

        <!-- Displays Home Page Link as Site Title -->
        <div id="site-title" class="x-large">
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <!-- Displays Site Navigation From Header Menu -->
        <div id="menu-nav">
            <ul>
                <li>
                    <?php wp_nav_menu(
                        [ 'theme_location' => 'header-menu',
                        'menu_class' => 'navigation',
                        ]);?>
                    
                </li>
            </ul>
        </div>

        <!-- <div id="mobile-nav"><a class="mobile-nav" href="#">&#9776;</a></div> -->
    </div>
