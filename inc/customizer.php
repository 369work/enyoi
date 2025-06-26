<?php
/**
 * Customizer functionality for the Enyoi theme.
 */

function enyoi_customize_register($wp_customize) {
    // Add a section for the theme options
    $wp_customize->add_section('enyoi_theme_options', array(
        'title'    => __('Theme Options', 'enyoi'),
        'priority' => 30,
    ));

    // Add a setting for the custom logo
    $wp_customize->add_setting('enyoi_custom_logo', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    // Add a control for the custom logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'enyoi_custom_logo', array(
        'label'    => __('Custom Logo', 'enyoi'),
        'section'  => 'enyoi_theme_options',
        'settings' => 'enyoi_custom_logo',
    )));

    // 店舗情報セクション
    $wp_customize->add_section('enyoi_store_info', array(
        'title'    => __('Enyoi Store Settings', 'enyoi'),
        'priority' => 30,
    ));

    // 店舗の所在地(textarea)
    $wp_customize->add_setting('enyoi_store_location', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_store_location', array(
        'label'    => __('Store Location', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'textarea',
    ));

    // 店舗の電話番号
    $wp_customize->add_setting('enyoi_store_phone', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_store_phone', array(
        'label'    => __('Store Phone Number', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'text',
    ));

    // 店舗の営業開始時間
    $wp_customize->add_setting('enyoi_store_opening_time', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_store_opening_time', array(
        'label'    => __('Store Opening Time', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'text',
    ));

    // 店舗の営業終了時間
    $wp_customize->add_setting('enyoi_store_closing_time', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_store_closing_time', array(
        'label'    => __('Store Closing Time', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'text',
    ));

    // 店舗の定休日
    $wp_customize->add_setting('enyoi_store_holiday', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('enyoi_store_holiday', array(
        'label'    => __('Store Holiday', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'text',
    ));

    // 最寄り駅
    $wp_customize->add_setting('enyoi_nearest_station', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_nearest_station', array(
        'label'    => __('Nearest Station', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'textarea',
    ));

    // SNSリンクYoutube
    $wp_customize->add_setting('enyoi_youtube_link', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_youtube_link', array(
        'label'    => __('YouTube Link', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'url',
    ));

    // SNSリンクInstagram
    $wp_customize->add_setting('enyoi_instagram_link', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_instagram_link', array(
        'label'    => __('Instagram Link', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'url',
    ));

    // SNSリンクTwitter
    $wp_customize->add_setting('enyoi_twitter_link', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_twitter_link', array(
        'label'    => __('Twitter Link', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'url',
    ));

    // SNSリンクFacebook
    $wp_customize->add_setting('enyoi_facebook_link', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enyoi_facebook_link', array(
        'label'    => __('Facebook Link', 'enyoi'),
        'section'  => 'enyoi_store_info',
        'type'     => 'url',
    ));
}





