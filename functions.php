<?php 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myfirsttheme
 */

/**
 * Let WordPress manage the document title. By adding theme support, we declare that this theme does not use a hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
 */

 /**
  * Themes must declare support for the Featured Image function before the Featured Image interface will appear on the Edit screen. 
  */
function myfirsttheme_setup() {
    add_theme_support('title-tag');

    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'myfirsttheme_setup');

 
//this function will add all of your styles and scripts, everything from Google Fonts to resets.
function myfirsttheme_enqueue_styles() {
	//required stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    
     //enqueue scripts:
    //wp_enqueue_script('file-name', get_template_directory_uri(), '/path/to/file.js', array('jquery'),1.1, true); 
	
}
add_action('wp_enqueue_scripts', 'myfirsttheme_enqueue_styles');

?>