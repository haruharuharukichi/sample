<?php
/**
 * ブログ一覧パーツ
 *
 * @link https://haruharuharukichi.github.io/
 *
 * @package WordPress
 * @subpackage smartLine
 * @since 1.0
 * @version 1.0
 */
?>
<li class="main_card link inverted inviewfadeInUp">
    <?php
    if (has_post_thumbnail()) {
        the_post_thumbnail('full', array( 'class' => 'card_img' ));
    }?>
    <div class="flex font-sm card_header">
        <p class="card_info"><?php the_time("Y/m/j") ?></p>
        <h3 class="card_title"><?php the_title(); ?></h3>
    </div>
    <a href="<?php echo get_permalink(); ?>" class="card_body">
        <p class="font-xs">
            <?php echo mb_strimwidth(strip_tags($post-> post_content), 0, 100, "...", "UTF-8"); ?>
        </p>
        <span class="font-md card_btn">more</span>
    </a>
</li>