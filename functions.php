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

    /** custom logo **/
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => 'Main Menu'
		)
	);
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


//https://developer.wordpress.org/reference/functions/the_excerpt/
function wpdocs_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( ' Read More', 'textdomain' )
		);
	}

	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>