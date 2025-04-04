<?php

function custom_theme_support() {
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'editor-styles' );
    add_editor_style();
    add_theme_support( 'automatic-feed-links' );

    register_block_style(
        'core/paragraph',
        array(
            'name' => 'custom-style',
            'label' => __( 'Custom Style', 'ecorescue' ),
        )
    );
    
    register_block_pattern(
        'my-plugin/my-block-pattern',
        array(
            'title'       => __( 'My Block Pattern', 'ecorescue' ),
            'description' => _x(
                'A custom block pattern for my plugin.',
                'Block pattern description',
                'ecorescue'
            ),
            'categories'  => array( 'my-pattern-category' ),
            'content'     => '<!-- wp:paragraph --><p>' . __( 'This is a custom block pattern.', 'ecorescue' ) . '</p><!-- /wp:paragraph -->',
        )
    );

    register_nav_menus( array(
        'header-nav' => __( 'header navigation', 'ecorescue' ),
        'sidebar-nav' => __( 'sidebar navigation', 'ecorescue' ),
        'footer-nav' => __( 'footer navigation', 'ecorescue' ),
        'question-nav' => __( 'question navigation', 'ecorescue' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_support' );


function readScript() {
    wp_enqueue_style( 'google-fonts_Noto+Sans+JP', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', array(), '');
    wp_enqueue_style( 'google-fonts_M+PLUS+Rounded+1c', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap', array(), '');

    wp_enqueue_style( 'style', get_theme_file_uri('/css/style.css'), array(), '1.0.0');
    wp_enqueue_script( 'script', get_theme_file_uri('/js/main.js'), array(), time(), true);
}
add_action( 'wp_enqueue_scripts', 'readScript' );


// ブロックエディタに適用されるCSSを無効化
function remove_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );


//コメントの返信機能を実装するために必要なスクリプトで、コメントの「返信」ボタンをクリックした際に動作します。
function mytheme_enqueue_comment_reply_script() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_comment_reply_script' );


//テキストドメインを読み込み
function theme_slug_setup() {
    load_theme_textdomain( 'ecorescue', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
    

//ウィジェットエリア登録
function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

add_filter('show_admin_bar', '__return_false');

?>