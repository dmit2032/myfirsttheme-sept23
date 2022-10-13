<?php
/***
*   Template part for displaying content in the single.php template (individual/article blog page)
*   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
*   @package myfirsttheme
*/
?>
    <div class="container">
        <article <?php post_class();?> id="post-<?php the_ID();?>" >

            <!-- entry header -->
            <header>
                <!-- get the page title -->
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <?php get_the_date(); ?>
            </header>

            <div class="entry-content">
                <!-- 
                    -- displays the page/post content.
                    -- You can add more html tags and other WP template tags/functions such as custom post types ( we will be), but what you see is the very minimum what you need to have your content to be displayed.
                -->
                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>		
                <?php the_content(); //displays the content from the editor ?>
            </div>

        </article>
    </div>

<!-- *Note: You can add a whole bunch more here such as author, category and or tag links. What you see now is just the starting point.  -->

