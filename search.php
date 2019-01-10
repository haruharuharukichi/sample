<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage smartLine
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<div class="main_wrapper">
		<?php
		if ( have_posts() ) :
			echo '<ul class="grid grid-3 main_content main_list post">';
			while ( have_posts() ) : the_post();

				get_template_part('content');

			endwhile; // End of the loop.
			echo '</ul>';
			if ($wp_query->max_num_pages > 1) {
			    wp_pagination($paged,$wp_query->max_num_pages);
			}
			?>
		<?php 

	else : 
		get_template_part('notFound');
	endif;
	?>
	</div>
<?php
get_footer();
