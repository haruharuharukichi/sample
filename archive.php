<?php
/**
 * アーカイブページ表示用
 *
 * @link https://haruharuharukichi.github.io/
 *
 * @package WordPress
 * @subpackage smartLine
 * @since 1.0
 * @version 1.0
 */

get_header(); 
 ?>
    <section id="info" class="grid grid-hl overlaidTop">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('full', array( 'class' => 'main_img' ));
        }?>
        <div class="main_wrapper">
            <div class="main_header">
                <h1 class="entry-title font-xl main_title"><?php the_archive_title(); ?></h1>
            </div>
            <div class="main_content">
                <?php breadcrumb(); ?>
                <div class="font-xs">
                    <div id="author">
                        <span>author：</span>
                        <span class="vcard author">
                            <span class="fn">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="bookmark" class="info_link"><?php the_author(); ?></a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<div class="main_wrapper">
		<?php if ( have_posts() ) : 

		echo '<h2 class="inline-center main_title">all posts</h2><ul class="grid grid-3 main_content main_list post">';

			while ( have_posts() ) :
				the_post();

				get_template_part('content');

			endwhile;

		echo '</ul>';

		if ($wp_query->max_num_pages > 1) :
		    wp_pagination($paged,$wp_query->max_num_pages);
		endif;
		
		else :
			get_template_part('notFound');
		endif; ?>
	</div>
<?php
get_footer();
