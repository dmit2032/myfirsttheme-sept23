<?php
/**
 * The template for displaying all single posts.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package myfirsttheme
 */
?>

<?php get_header(); ?>

    <main>
        <h2>This is single.php</h2>

        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_title( '<h2>', '</h2>' );
                    the_content();
                endwhile;
            else:
                _e( 'Sorry, no pages matched your criteria.', 'textdomain' );
            endif;
        ?>
    </main>

<?php get_footer(); ?>