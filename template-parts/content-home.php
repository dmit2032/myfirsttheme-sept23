<?php
/***
*   Template part for displaying content in the front-page.php (home page)
*   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
*   @package myfirsttheme
*   
*/
?>

    <div class="container">
        <article <?php post_class();?> id="post-<?php the_ID();?>" >
            <header>
                <!-- get the page title -->
                <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
            </header>
            
            <div class="entry-content">
                <!-- 
                    -- displays the page/post content.
                    -- You can add more html tags and other WP template tags/functions such as custom post types ( we will be), but what you see is the very minimum what you need to have your content to be displayed.
                -->
                <?php the_category(); ?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <?php the_excerpt(); ?>
            </div>
        </article>
    </div>


