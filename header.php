<?php
/**
 * ヘッダー表示用
 *
 * @link https://haruharuharukichi.github.io/
 *
 * @package WordPress
 * @subpackage smartLine
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8N">
<meta name="author" content="Haruki Kawashita">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body <?php  body_class("hfeed"); ?> >
    <nav class="inline-center navbar_global" role="navigation">
            <?php wp_nav_menu( array(
                'theme_location'=>'Navigation', 
                'menu_class'    =>'font-md',
                'container'     =>false, 
               'items_wrap'    =>'<ul class="%2$s">%3$s</ul>'));
            ?>
    </nav>
    <div id="verticalLine">
        <div class="container grid">
            <div class="verticalLine_line"></div>
            <div class="verticalLine_line"></div>
            <div class="verticalLine_line"></div>
            <div class="verticalLine_line"></div>
        </div>
    </div>
    <header role="banner">
        <div class="grid grid-1 header_wrapper">
            <?php 
            if(is_home()){ ?>
                <div class="header_img left inviewfadeInImg"></div>
                <div class="header_img right inviewfadeInImg"></div>
                <div class="flex header_content main inviewfadeInUp">
                    <h1 class="header_title">TITLE</h1>
                <?php
            }else{ ?>
                    <div class="header_content sub inviewfadeInUp">
                <?php if(is_page()){ ?>
                        <h1 class="font-xl header_title">:<?php echo basename(get_permalink()); ?></h1>
                <?php }elseif(is_single()){ ?>
                        <h2 class="font-xl header_title">:blog</h2>
                <?php }elseif(is_archive()){ ?>
                        <h1 class="font-xl header_title">:archive</h1>
                <?php }elseif (is_search()) { ?>
                        <h1 class="font-xl header_title">:search</h1>
                <?php }elseif (is_404()) { ?>
                        <h1 class="font-xl header_title">:not found</h1>
                <?php }?>
                    </div>
                    <div class="flex header_content main inviewfadeInUp">
                        <h2 class="header_title">TITLE</h2>
      <?php } ?>
                <p class="font-sm header_text">WEB DESIGN</p>
            </div>
        </div>
    </header>
    <main role="main" class="container">