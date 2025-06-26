<?php
/*
*
* Admin settings for the Enyoi theme.
*/


//　カスタマイザーで設定した内容を取得する関数
function enyoi_get_customizer_setting($setting_name, $default = '') {
    $value = get_theme_mod($setting_name, $default);

    // サニタイズ処理を追加
    if (is_array($value)) {
        // 配列の場合は各要素をサニタイズ
        return array_map('enyoi_sanitize_text_field', $value);
    }
    if (is_string($value)) {
        // 文字列の場合はサニタイズ
        return esc_html($value);
    }
    // その他の型はそのまま返す
    return enyoi_sanitize_text_field($value);

}

// テキストフィールドのサニタイズ関数
function enyoi_sanitize_text_field($value) {
    // 文字列の場合はサニタイズ
    if (is_string($value)) {
        return sanitize_text_field($value);
    }
    // 配列の場合は各要素をサニタイズ
    if (is_array($value)) {
        return array_map('sanitize_text_field', $value);
    }
    // その他の型はそのまま返す
    return $value;
}

?>