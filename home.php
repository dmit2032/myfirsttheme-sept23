<?php
/**
 * The home template file
 *
 * This page will display your latest blog posts. If home.php does not exit, WordPress will use index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myfirsttheme
 */
?>

<?php get_header(); ?>

    <h2>This is home.php</h2>

    <!-- https://developer.wordpress.org/themes/basics/the-loop/#blog-archive -->
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