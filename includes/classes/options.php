<?php

class Options {

    /**
    * Theme Options
    */

   public function Options() {
       

       // Menu Support
       add_theme_support('menus');

       // RSS Feed Supoprt
       add_theme_support( 'automatic-feed-links' );

       // Post Format Support
       add_theme_support( 'post-formats', [ 
           'standard', 
           'status',
           'aside',
           'image',
           'audio',
           'video',
           'quote',
           'link',
           'chat',
            ] );

       // Post Thumbnail Support
       add_theme_support( 'post-thumbnails' );
       add_image_size( 'small', 350, 350, false );
       add_image_size( 'medium', 750, 750, false );
       add_image_size( 'large', 1700, 1700, false ); 

       // Title Support
       add_theme_support( 'title-tag' );

       // Custom Header Support
       add_theme_support( 'custom-header' );

       // Navigation Menu Support
        register_nav_menus(
	        array(
		        'header-menu' =>__('Header Menu', 'theme'),
		        'mobile-menu' =>__('Mobile Menu', 'theme'),
		        'footer-menu' =>__('Footer Menu', 'theme'),
	        )
        );

       // Responive Video Embed Options
       add_theme_support( 'responsive-embeds' );

   }

}