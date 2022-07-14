<?php

/**
* Theme Functions
*
* @package Premise
*/

require( 'autoloader.php' );
require_once( 'assets/ajax/filter.php' );

// Loads Required Theme Plugins
$Options = new Options;

// Loads Theme Styling
$Styling = new Styling;

// Displays Associated Post Format
$formatDisplay = new formatDisplay;

?>