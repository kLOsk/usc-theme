<?php
/**
 * Universal SCSS Child Theme functions and definitions
 * All the functions are in the PHP files in the `inc/` folder.
*/
if ( ! defined('ABSPATH') ) {
  exit;
}

/**
 * Define Constants
 */
define( 'CHILD_THEME_NAME', 'usc-theme' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

require get_stylesheet_directory() . '/functions/cleanup.php';
require get_stylesheet_directory() . '/functions/enqueues.php';
