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

    <h2>This is the category page</h2>

    <h1 class="category-title">Category: <?php single_cat_title( '', true ); ?></h1>

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