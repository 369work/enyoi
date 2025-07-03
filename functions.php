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












