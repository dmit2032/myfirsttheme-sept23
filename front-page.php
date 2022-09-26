<?php
/**
 * The template for displaying the custom home page.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 * 
 * @package myfirsttheme
 */
?>

<?php get_header(); ?>

<h2>This is front-page.php</h2>

<!-- developer.wordpress.org/themes/basics/the-loop/#blog-archive -->
<?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h2>', '</h2>' );
            the_post_thumbnail();
            the_excerpt();
        endwhile;
    else:
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>

<?php get_footer(); ?>