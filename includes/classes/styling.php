<?php

class Styling {

    public function Styling(){

        // Enqueue jQuery
        wp_enqueue_script( 'jquery' );

        // Register Styles
        wp_register_style('stylesheet', get_template_directory_uri() . '/assets/scss/style.css', [], null, 'all' );
        wp_register_style('mediaplayer', get_template_directory_uri() . '/assets/scss/media.css', [], null, 'all' );
        wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', [], null, 'all' );
        
        //Register Scripts
        wp_register_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], filemtime( get_template_directory() . '/assets/js/scripts.js' ));
        wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js', [ 'jquery' ], false, true);

        // Wavesurfer
	    // wp_enqueue_script('wavesurfer', get_template_directory_uri() . '/assets/js/wavesurfer.js', '', 2, true);

        //Enqueue Scripts
        wp_enqueue_script( 'scripts' );
        wp_enqueue_script( 'bootstrap-js' );

        // Enqueue Styles
        wp_enqueue_style( 'stylesheet' );
        wp_enqueue_style( 'mediaplayer' );
        wp_enqueue_style( 'bootstrap-css' );

        }

}