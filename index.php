<?php
/**
 *
 *メインページ
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
<section id="aboutIndex" class="inverted full">
    <div class="grid grid-hr main_wrapper">
        <div class="inline-right main_header">
            <h2 class="font-xl main_title inviewfadeInUp">about</h2>
            <p class="font-md inviewfadeInUp">who we are<br>and<br>what we want</p>
        </div>
        <div class="main_content">
            <p class="font-xs main_text inviewfadeInUp">
                ヒラメキがキラメキをつくる<br><br>
                技術が進み、違いが無くなりつつある今だからこそ、思いを大切にしたい<br>
                思いを起点に、技術でそれを磨き上げる<br><br>
                私たちは、心と未来の開拓者です
            </p>
            <a href="<?php echo home_url('/about');?>" class="flex font-sm main_btn inverted inviewfadeInUp">
                <span>our philosophy</span><span class="rod"></span></a>
            </div>
        </div>
    </section>
    <section id="featureIndex" class="grid grid-hr overlaidTop">
        <img src="<?php echo get_theme_file_uri() ?>/lib/images/feature_img.jpeg" class="main_img inviewfadeInImg">
        <div class="main_wrapper">
            <div class="main_header">
                <h2 class="font-xl main_title inviewfadeInUp">feature</h2>
                <p class="font-md inviewfadeInUp">we think that<br>social contribution is important</p>
            </div>
            <div class="main_content inviewfadeInUp">
                <p class="font-xs">
                    1人よりも2人、2人よりも3人<br><br>
                    繋がることで、人は更なる力を発揮します<br>
                    だからこそ、私たちはつながりを大切にします
                </p>
            </div>
        </div>
    </section>
    <section id="serviceIndex" class="main_wrapper inviewfadeInImg">
        <div class="inline-right grid grid-1 main_header inviewfadeInUp">
            <h2 class="font-xl">SERVICE</h2>
            <p class="font-md">our business to<br>achieve the vision</p>
        </div>
        <ul class="grid grid-3 inline-center main_content">
            <li class="inviewfadeInUp">
                <h3 class="font-lg">DISTANCE</h3>
                <p class="font-xs">あなたと親身に向き合います</p>
            </li>
            <li class="inviewfadeInUp">
                <h3 class="font-lg">SERVICE</h3>
                <p class="font-xs">喜びを作ることが仕事です</p>
            </li>
            <li class="inviewfadeInUp">
                <h3 class="font-lg">DILIGENCE</h3>
                <p class="font-xs">日々の努力を怠りません</p>
            </li>
        </ul>
        <a href="<?php echo home_url('/service');?>" class="flex font-lg main_btn center inverted inviewfadeInUp">
            <span>get more</span><span class="rod"></span>
        </a>
    </section>
    <section id="newsIndex" class="grid grid-hr main_wrapper">
        <div class="inline-right grid grid-1 main_header">
            <h2 class="font-xl main_title inviewfadeInUp">news</h2>
            <p class="font-md inviewfadeInUp">notice our<br>movement</p>
            <a href="<?php echo home_url('/news');?>" class="flex font-md main_btn right inviewfadeInUp">
                <span>view all</span><span class="rod"></span>
            </a>
        </div>
        <ul class="grid grid-1 main_content">
            <?php
            if (have_posts()) :
                while (have_posts()) : 
                    the_post(); 
                    ?>
                    <li class="main_post inviewfadeInUp">
                        <a href="<?php echo get_permalink(); ?>" class="post_link">
                            <h3 class="font-md post_title"><?php the_title(); ?></h3>
                            <span class="font-xs post_date"><?php the_time("Y/m/j") ?></span>
                        </a>
                    </li>
                    <?php
                endwhile;
            else :
                ?>記事がありません<?php
            endif;
            ?>
        </ul>
    </section>
    <section id="detailIndex" class="grid grid-hl overlaidBottom">
        <img src="<?php echo get_theme_file_uri() ?>/lib/images/detail_bgr.jpg" class="main_img inviewfadeInImg">
        <div class="grid grid-1 main_wrapper">
            <div class="main_header inviewfadeInUp">
                <h2 class="font-xl main_title">detail</h2>
                <p class="font-md">more information<br>about us</p>
            </div>
            <div class="main_content inviewfadeInUp">
                <h3 class="font-md main_title">tokyo office</h3>
                <p class="font-xs">
                    〒〒220-0012<br />
                    神奈川県横浜市西区
                </p>
            </div>
            <a href="<?php echo home_url('/contact');?>" class="flex inline-right font-md main_btn right inviewfadeInUp">
                <span>contact</span><span class="rod"></span>
            </a>
        </div>
    </section>
    <?php 
    get_footer();