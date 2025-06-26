<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

define('ENYOI_THEME_VERSION', wp_get_theme()->get('Version'));
define('ENYOI_THEME_ASSETS', get_template_directory_uri() . '/assets');

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function () {
    while (@ob_end_flush());
});

// Theme setup
function enyoi_theme_setup() {

    // テーマサポートを追加
    add_theme_support('wp-block-styles');
    add_theme_support('block-patterns');
    add_theme_support('block-templates');
    add_theme_support('block-template-parts');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style(get_parent_theme_file_uri('assets/css/editor-style.css'));
    add_theme_support('appearance-tools');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');


    // ナビゲーションメニューを登録
    register_nav_menus(array(
        'enyoi_primary' => __('Enyoi Header Menu', 'enyoi'),
        'enyoi_footer' => __('Enyoi Footer Menu', 'enyoi')
    ));

    // sidebar ウィジェットエリアを登録
    register_sidebar(array(
        'name'          => __('Sidebar', 'enyoi'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'enyoi'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

}
add_action('after_setup_theme', 'enyoi_theme_setup');

// Register block patterns
function enyoi_register_block_patterns() {
    register_block_pattern_category(
        'enyoi_patterns',
        array('label' => __('Enyoi Patterns', 'enyoi'),
        'description' => __('Enyoi pattern collection', 'enyoi'))
    );
}
add_action('init', 'enyoi_register_block_patterns');

// Enqueue styles and scripts
function enyoi_enqueue_scripts() {
    wp_enqueue_style('enyoi-style', get_stylesheet_uri(), array(), ENYOI_THEME_VERSION);

    wp_enqueue_style('enyoi-custom-style', ENYOI_THEME_ASSETS . '/css/custom.css', array(), ENYOI_THEME_VERSION);

    wp_enqueue_script('enyoi-script', ENYOI_THEME_ASSETS . '/js/main.js', array('jquery'), ENYOI_THEME_VERSION, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'enyoi_enqueue_scripts');

/**
 * カスタムブロックエディタースタイルを登録
 */
function enyoi_enqueue_block_editor_assets()
{
    wp_enqueue_style('enyoi-block-editor-styles', ENYOI_THEME_ASSETS . '/css/blocks-editor.css', array(), ENYOI_THEME_VERSION);
}
add_action('enqueue_block_editor_assets', 'enyoi_enqueue_block_editor_assets');


function get_block_pattern_content($pattern_name)
{
    $pattern_file = get_template_directory() . '/patterns/' . $pattern_name . '.php';

    if (file_exists($pattern_file)) {
        ob_start();
        include $pattern_file;
        return ob_get_clean();
    }

    return '';
}


// Enyoiのデフォルトメニューを作成
function enyoi_create_default_menu()
{
    // Primary Menu (ヘッダー用)
    $primary_menu_name = __('Enyoi Header Menu', 'enyoi');
    $primary_menu_exists = wp_get_nav_menu_object($primary_menu_name);

    if (!$primary_menu_exists) {
        $primary_menu_id = wp_create_nav_menu($primary_menu_name);
        if (!is_wp_error($primary_menu_id)) {
            // メニューロケーションに割り当て
            $locations = get_theme_mod('nav_menu_locations');
            $locations['enyoi_primary'] = $primary_menu_id;
            set_theme_mod('nav_menu_locations', $locations);

            // デフォルトのメニューアイテムを追加
            wp_update_nav_menu_item($primary_menu_id, 0, array(
                'menu-item-title' => __('Home', 'enyoi'),
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish'
            ));
        }
    }

    // Footer Menu (フッター用)
    $footer_menu_name = __('Enyoi Footer Menu', 'enyoi');
    $footer_menu_exists = wp_get_nav_menu_object($footer_menu_name);

    if (!$footer_menu_exists) {
        $footer_menu_id = wp_create_nav_menu($footer_menu_name);
        if (!is_wp_error($footer_menu_id)) {
            // メニューロケーションに割り当て
            $locations = get_theme_mod('nav_menu_locations');
            $locations['enyoi_footer'] = $footer_menu_id;
            set_theme_mod('nav_menu_locations', $locations);

            // デフォルトのフッターメニューアイテムを追加
            wp_update_nav_menu_item($footer_menu_id, 0, array(
                'menu-item-title' => __('Privacy Policy', 'enyoi'),
                'menu-item-url' => home_url('/privacy-policy'),
                'menu-item-status' => 'publish'
            ));
        }
    }
}
add_action('after_setup_theme', 'enyoi_create_default_menu');


// admin setting includes
require_once get_template_directory() . '/inc/admin-setting.php';








