<?php
/**
 * Enyoi Theme Functions.
 *
 * @package Enyoi
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ENYOI_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'ENYOI_THEME_ASSETS', get_template_directory_uri() . '/assets' );

/**
 * Theme setup.
 */
function enyoi_theme_setup() {
	load_theme_textdomain( 'enyoi', get_template_directory() . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'assets/css/editor-style.css', 'assets/css/custom-v2.css', 'assets/css/editor-v2.css' ) );
	add_theme_support( 'appearance-tools' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'enyoi_theme_setup' );

/**
 * Register block patterns.
 */
function enyoi_register_block_patterns() {
	register_block_pattern_category(
		'enyoi_patterns',
		array(
			'label'       => __( 'Enyoi Patterns', 'enyoi' ),
			'description' => __( 'Enyoi pattern collection', 'enyoi' ),
		)
	);
}
add_action( 'init', 'enyoi_register_block_patterns' );

/**
 * Enqueue styles and scripts.
 */
function enyoi_enqueue_scripts() {
	wp_enqueue_style( 'enyoi-style', get_stylesheet_uri(), array(), ENYOI_THEME_VERSION );

	wp_enqueue_style( 'enyoi-custom-style', ENYOI_THEME_ASSETS . '/css/custom.css', array(), ENYOI_THEME_VERSION );

	// 2.0 パターン (enyoi/*-v2) 用。旧 custom.css は残したまま追加で読み込む。
	wp_enqueue_style( 'enyoi-custom-v2-style', ENYOI_THEME_ASSETS . '/css/custom-v2.css', array( 'enyoi-custom-style' ), ENYOI_THEME_VERSION );

	wp_enqueue_script( 'enyoi-script', ENYOI_THEME_ASSETS . '/js/main.js', array(), ENYOI_THEME_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'enyoi_enqueue_scripts' );

/**
 * カスタムブロックエディタースタイルを登録
 */
function enyoi_enqueue_block_editor_assets() {
	if ( ! is_admin() ) {
		return;
	}

	wp_enqueue_style( 'enyoi-block-editor-styles', ENYOI_THEME_ASSETS . '/css/blocks-editor.css', array(), ENYOI_THEME_VERSION );
}
add_action( 'enqueue_block_assets', 'enyoi_enqueue_block_editor_assets' );

/**
 * JS無効時のフォールバック: fade-in要素を表示状態にする
 */
function enyoi_noscript_fallback() {
	echo '<noscript><style>.fade-in { opacity: 1; transform: none; }</style></noscript>';
}
add_action( 'wp_head', 'enyoi_noscript_fallback' );

/**
 * Add the About Enyoi page under Appearance.
 *
 * @since 2.2
 */
function enyoi_add_about_page() {
	add_theme_page(
		__( 'About Enyoi', 'enyoi' ),
		__( 'About Enyoi', 'enyoi' ),
		'edit_theme_options',
		'enyoi-about',
		'enyoi_render_about_page'
	);
}
add_action( 'admin_menu', 'enyoi_add_about_page' );

/**
 * Load the About Enyoi page styles on that page only.
 *
 * @since 2.2
 *
 * @param string $hook_suffix The current admin page.
 */
function enyoi_enqueue_about_page_styles( $hook_suffix ) {
	if ( 'appearance_page_enyoi-about' !== $hook_suffix ) {
		return;
	}

	wp_enqueue_style( 'enyoi-admin', ENYOI_THEME_ASSETS . '/css/admin.css', array(), ENYOI_THEME_VERSION );
}
add_action( 'admin_enqueue_scripts', 'enyoi_enqueue_about_page_styles' );

/**
 * Render the About Enyoi page.
 *
 * @since 2.2
 */
function enyoi_render_about_page() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$new_tab = '<span class="screen-reader-text">' . esc_html__( '(opens in a new tab)', 'enyoi' ) . '</span>';
	?>
	<div class="wrap enyoi-about">
		<h1><?php esc_html_e( 'About Enyoi', 'enyoi' ); ?></h1>
		<p class="enyoi-about__lead"><?php esc_html_e( 'Enyoi is a refined block theme for salons, clinics and small business sites. You can edit the templates, patterns and styles from the Site Editor.', 'enyoi' ); ?></p>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Get Started', 'enyoi' ); ?></h2>
			<p><?php esc_html_e( 'Open the Site Editor to change the front page, header, footer and colors.', 'enyoi' ); ?></p>
			<p>
				<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>">
					<?php esc_html_e( 'Open the Site Editor', 'enyoi' ); ?>
				</a>
			</p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Review the Enyoi Theme', 'enyoi' ); ?></h2>
			<p><?php esc_html_e( 'Thank you for using the Enyoi theme! We would love to hear your feedback. Please take a moment to leave a review.', 'enyoi' ); ?></p>
			<p>
				<a class="button" href="https://wordpress.org/support/theme/enyoi/reviews/" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Leave a Review', 'enyoi' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
			</p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Theme Support', 'enyoi' ); ?></h2>
			<p><?php esc_html_e( 'Free support for the Enyoi theme is provided on the WordPress.org support forum.', 'enyoi' ); ?></p>
			<p>
				<a class="button" href="https://wordpress.org/support/theme/enyoi/" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Support Forum', 'enyoi' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
			</p>
			<p><?php esc_html_e( 'Paid customization and paid email support are also available. For details, please contact 369Theme.', 'enyoi' ); ?></p>
			<p class="enyoi-about__links">
				<a class="button" href="https://369theme.com/order" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Request Customization', 'enyoi' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
				<a class="button" href="https://369theme.com/contact?product=enyoi" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Contact 369Theme', 'enyoi' ); ?>
					<?php echo $new_tab; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
				</a>
			</p>
		</div>
	</div>
	<?php
}
