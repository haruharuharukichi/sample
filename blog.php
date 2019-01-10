<?php
/*
Template Name: blog
*/
/**
*
* ブログページ表示用
*
* @link https://haruharuharukichi.github.io/
*
* @package WordPress
* @subpackage smartLine
* @since 1.0
* @version 1.0
*/
get_header();?>
	<div class="main_wrapper">
				<?php
				$paged = (int) get_query_var('paged');
				$args = array(
				    'posts_per_page' => 8,
				    'paged' => $paged,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish'
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) :
					echo '<ul class="grid grid-3 main_content main_list post">';
				    while ( $the_query->have_posts() ) : $the_query->the_post();
			        get_template_part('content');
				    endwhile;
				    echo '</ul>';
				else:

					get_template_part('notFound');

				endif; ?>
			<?php
				if ($the_query->max_num_pages > 1) {
				    wp_pagination($paged,$the_query->max_num_pages);
				}
				?>
	</div>
<?php
get_footer();