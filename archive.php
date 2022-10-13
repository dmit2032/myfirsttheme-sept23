<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myfirsttheme
 */
?>

<?php get_header(); ?>

    <h2>This is the archive page</h2>

    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                
                get_template_part( 'template-parts/content', 'home' );
            
            } 
        } 
    ?>

<?php
get_footer();
