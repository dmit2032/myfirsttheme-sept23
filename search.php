<?php
/***
*   The template for displaying search results
*
*   @package design+code demo
*   @since 1.0.0
*/

//display header
get_header();
?>

<main class="site-main" id="main">
    <h2>This is search.php</h2>

    <?php if(have_posts()) : ?>
    
        <header>
            <h1>
                <!-- /* translators: %s: query term */ -->
                <?php printf(esc_html__( 'Search Results for %s', 'myfirsttheme'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
        </header>
    
        <!-- start loop -->
        <?php  while(have_posts()) : the_post(); ?>
        
        <!-- //do things -- display content : the function below will pull the content from the template partial. -->
            <?php get_template_part( 'template-parts/content', 'search' ); ?>
        
        <?php  endwhile; ?> 
        <!-- end while loop -->
        <?php else : ?>
            
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. --> 
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
        <!-- This is where you would add pagination. Pagination in a search result page is smart idea, especially if your search returns a lot of results.--> 
</main>  

<!-- //display footer -->
<?php get_footer();

