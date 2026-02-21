<?php
/**
 * Yoshikawa Hospital functions and definitions
 */

function yoshikawa_hospital_scripts()
{
    wp_enqueue_style('yoshikawa-hospital-style', get_stylesheet_uri());

    // スタイルシートの更新日時をバージョン番号として使用（キャッシュ対策）
    $css_path = get_template_directory() . '/assets/css/style.css';
    $version = file_exists($css_path) ? filemtime($css_path) : '1.0.0';
    wp_enqueue_style('yoshikawa-hospital-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version);

    wp_enqueue_script('yoshikawa-hospital-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'yoshikawa_hospital_scripts');

function yoshikawa_hospital_setup()
{
    register_nav_menus(array(
        'global' => 'グローバルナビゲーション',
    ));
}
add_action('after_setup_theme', 'yoshikawa_hospital_setup');
