<?php

/**
 * Autoloads files when requested
 * 
 * @since  1.0.0
 * @param  string $class = Name of the class being requested
 */

    spl_autoload_register( function( $class ) {
        $file = __DIR__ . '/includes/classes/' . $class . '.php' ;
        if( file_exists( $file ) ){
            require $file;
        }
    });