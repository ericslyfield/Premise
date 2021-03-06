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
<div class="navigation bold show-navigation" >

    <!-- Displays Home Page Link as Site Title -->
    <div id="site-title" class="x-large">
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <!-- Displays Site Navigation From Header Menu -->
    <div id="site-menu">
        <ul>
            <li>
                <?php wp_nav_menu(
                    [ 'theme_location' => 'header-menu',
                    'menu_class' => 'header-menu',
                    ]);?>             
            </li>
        </ul>
    </div>

    <a  id="toggle-nav" class="toggle-nav" onclick="toggleVis()" href="#!">&#9776;</a>

</div>

<div id="mobile-wrap" class="x-large bold">

<?php wp_nav_menu(
    [ 'theme_location'  => 'mobile-menu',
    'menu_class'        => 'mobile-menu',
    'menu_id'           =>  'mobile-menu',
]);?>   

</div> 

         





