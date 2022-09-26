<?php
/**
 * The main template file
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package myfirsttheme
 */
?>

<?php get_header(); ?>

        <h2>This is the index.php</h2>
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_title( '<h3>', '</h3>' );
                    the_post_thumbnail();
                    the_excerpt();
                endwhile;
            else:
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
        ?>

<?php get_footer(); ?>