<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="l-wrapper">

        <?php get_sidebar(); ?>
        
        <main class="l-main">
            <header class="l-header">
                <div class="p-header">
                    <div class="header-top">
                        <?php get_template_part('template-parts/site-title'); ?>
                        <div class="banner-group">
                            <div class="freedial-banner">
                                <div class="freedial-area">
                                    <div class="freedial">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/phone.png') ); ?>" alt="フリーダイヤル">
                                        <a class="tel-link" href="tel:080-7848-7520">
                                            <p class="tel">080-7848-7520</p>
                                        </a>
                                    </div>
                                    <p>ご相談お見積り無料・24時間365日受付中</p>
                                </div>
                                <div class="discount">
                                    <p>ホームページ限定</p>
                                    <p>最大<strong>50%</strong>割引</p>
                                </div>
                            </div>
                            <?php get_template_part('template-parts/link-btn__contact--narrow'); ?>
                            <?php get_template_part('template-parts/link-btn__line--narrow'); ?>
                        </div>
                        <button class="c-hamburger-btn"  aria-label="メニューを開く">menu</button>
                    </div>
                    <nav class="p-header__nav">
                        <?php
                            wp_nav_menu(array(
                            'theme_location' => 'header-nav',
                            'menu_class'     => 'nav-menu',
                            'container'      => false,
                            ));
                        ?>
                    </nav>
                </div>
            </header>