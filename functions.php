<?php
/**
 * Functions - Framework gatekeeper
 *
 * This file defines a few constants variables, loads up the core framework file, 
 * and finally initialises the main WP Framework Class.
 *
 * @package RedCross
 * @subpackage Functions
 */

 	load_theme_textdomain( 'redline' , TEMPLATEPATH . '/lang' ); // load localizations

	/* Blast you red baron! Initialise WP Framework */
	require_once( TEMPLATEPATH . '/library/framework.php' );
	WPFramework::init();
?>