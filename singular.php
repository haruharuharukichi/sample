<?php
/**
 * 投稿ページ表示用
 *
 * @link https://haruharuharukichi.github.io/
 *
 * @package WordPress
 * @subpackage smartLine
 * @since 1.0
 * @version 1.0
 */

get_header(); 
while ( have_posts() ) :
    the_post(); ?>
<article <?php post_class('entry-content'); ?> >
    <section id="info" class="grid grid-hl overlaidTop">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('full', array( 'class' => 'main_img inviewfadeInImg' ));
        }?>
        <div class="main_wrapper">
            <div class="main_header">
                <h1 class="entry-title font-lg main_title inviewfadeInUp"><?php the_title(); ?></h1>
            </div>
            <div class="main_content inviewfadeInUp">
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
                    <div>
                        <span>publish : </span>
                        <?php 
                        $archive_year  = get_the_time( 'Y' ); 
                        $archive_month = get_the_time( 'm' ); ?>
                        <a href="<?php echo get_month_link( $archive_year, $archive_month ) ?>" rel="bookmark" class="info_link">
                            <time class="published" datetime="<?php the_time("Y/m/j") ?>"><?php the_time("Y/m/j") ?></time>
                        </a>
                    </div>
                    <div>
                        <span>update：</span>
                        <?php 
                        $archive_year  = get_the_modified_time( 'Y' ); 
                        $archive_month = get_the_modified_time( 'm' ); ?>
                        <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>" rel="bookmark" class="info_link">
                            <time class="updated" datetime="<?php the_modified_time('Y/m/j'); ?>"><?php the_modified_time('Y/m/j'); ?></time>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="main_wrapper">
    <?php if (is_single()) { ?>
            <div class="inline-center main_content">
    <?php }
         the_content();
         if (is_single()) { ?>
            </div>
    <?php } ?>
        </div>
</article>
<?php
	endwhile; // End of the loop.
    get_footer();