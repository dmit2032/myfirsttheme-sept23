<?php
/***
*   The template for displaying a 404 page.
*
*   @package myfristtheme
*/

get_header();
?>

<main class="site-main" id="main">
	<section class="error-404 not-found">
		<header>
			<h1 class="page-title"> </h1>
        </header>
        
        <div class="page-content">

			<!-- display the search form -->
            <!-- https://developer.wordpress.org/reference/functions/get_search_form/ -->
			<?php get_search_form(); ?>

            <!-- recent posts -->
            <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

			<!-- display categories -->
			<div class="widget widget_categories">
                <h2 class="widget-title"> <?php esc_html_e( 'Most Used Categories', 'theme name here' ); ?> </h2>
                <ul>
                    <?php 
                        wp_list_categories(
                            array(
                                'orderby'    => 'count',
                                'order'      => 'DESC',
                                'show_count' => 1,
                                'title_li'   => '',
                                'number'     => 10,
                            ) //end of array
                        ); //end of wp_list categories
                    ?> 
                </ul>
            </div>
            
            <!-- Monthly Archives -->
            <?php
                //translators: %1$s: smiley
                $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'theme name here' ), convert_smilies( ':)' ) ) . '</p>';
                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=$archive_content" );
            ?>

		</div> <!-- //page content -->
	</section>
</main>

<?php get_footer(); ?>



