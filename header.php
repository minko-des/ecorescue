<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php esc_attr(bloginfo('UTF-8') ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>不用品回収エコレスキュー</title>
    <meta name="description" content="<?php esc_attr(bloginfo('description') ); ?>">
    <meta name="keywords" content="エコレスキュー,不用品回収,大阪,粗大ゴミ処分,ゴミ屋敷片付け,遺品整理,家電買取">

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
                        <?php get_template_part('template-parts/logo-title'); ?>
                        <div class="banner-group">
                            <div class="freedial-banner">
                                <div class="freedial-area">
                                    <div class="freedial">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/freedial.png') ); ?>" alt="フリーダイヤルアイコン">
                                        <p class="tel">0120-012-345</p>
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
                        <button class="c-hamburger-btn">menu</button>
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