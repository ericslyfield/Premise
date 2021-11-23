<?php

class formatDisplay{

    public function formatDisplay(){

        if ( has_post_format( 'aside' )) {
            // Displays the Aside Post Format
                 get_template_part('includes/post','aside');
          }  else if (has_post_format('quote')) {
             // Displays the Quote Post Format
              get_template_part('includes/post','quote');
          }  else if (has_post_format('link')) {
             // Displays the Link Post Format
              get_template_part('includes/post','link');
          }  else if (has_post_format('image')) {
             // Displays the Image Post Format
              get_template_part('includes/post','image');
          }  else if (has_post_format('video')) {
             // Displays the Gallery Post Format
              get_template_part('includes/post','video');
          }  else if (has_post_format('gallery')) {
             // Displays the Gallery Post Format
              get_template_part('includes/post','gallery');
          }  else if (has_post_format('audio')) {
             // Displays the Audio Post Format
              get_template_part('includes/post','audio');
          }  else if (has_post_format('standard')) {
             // Displays the Standard Post Format
              get_template_part('includes/post','standard');
          }

    }

}

?>