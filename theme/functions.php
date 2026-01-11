<?php
//コンタクトフォームを特定のページのみで読み込ませる    
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

//不要タグやファイルの削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
// 絵文字用JS・CSSを非表示にする
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
//
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// wp versionを非表示にする
remove_action('wp_head','rest_output_link_wp_head');
//cssとかのver表記
function custom_theme_setup() {
  add_theme_support( 'html5', array( 'style', 'script') );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
// dns-prefetchを非表示にする
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}
// oEmbedを非表示にする
remove_action('wp_head','wp_oembed_add_discovery_links');
//画像のリサイズcssも不要
remove_action( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 );
//なんかうざい編集用のインラインcss
add_action( 'wp_enqueue_scripts', 'remove_classic_theme_style' );
function remove_classic_theme_style() {
    wp_dequeue_style('classic-theme-styles');
}
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
//Gutenberg用CSSを非表示にする
function dequeue_plugins_style() {
    wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);

// Speculation Rules（<script type="speculationrules">）を出さない
add_action('init', function () {
  remove_action('wp_head', 'wp_print_speculation_rules');
  remove_action('wp_footer', 'wp_print_speculation_rules');
}, 1);

// 設定ごと空にする（保険）
add_filter('wp_speculation_rules_configuration', function ($config) {
  return [];
});

//タイトルタグを設定
add_theme_support('title-tag');

add_action('wp_enqueue_scripts', function () {
  	// 共通（全ページ）
  	wp_enqueue_style('satukiso-style',get_theme_file_uri('/css/main.css'),[],null);
	  wp_enqueue_script('satukiso-main',get_theme_file_uri('/js/main.js'),[],null,true);

  // トップページのみ
  if (is_front_page()) {
    wp_enqueue_style('swiper-css','https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css',[],null);
	  wp_enqueue_style('satukiso-index',get_theme_file_uri('/css/index.css'),['satukiso-style'],null);
	  wp_enqueue_script('satukiso-index',get_theme_file_uri('/js/index.js'),['satukiso-main'],null,true);
  }

  // お問い合わせ
  if (is_page('contact')) {
    wp_enqueue_style('page-contact',get_theme_file_uri('/css/page-contact.css'),['satukiso-style'],null);
  }

  // アクセス
  if (is_page('access')) {
    wp_enqueue_style('page-access',get_theme_file_uri('/css/page-access.css'),['satukiso-style'],null);
    wp_enqueue_script('page-access',get_theme_file_uri('/js/page-access.js'),['satukiso-main'],null,true);
  }

  // 利用案内
  if (is_page('guide')) {
    wp_enqueue_style('page-guide',get_theme_file_uri('/css/page-guide.css'),['satukiso-style'],null);
    wp_enqueue_script('page-guide',get_theme_file_uri('/js/page-guide.js'),['satukiso-main'],null,true);
  }

  // 部屋紹介
  if (is_page('room')) {
	wp_enqueue_style('page-room',get_theme_file_uri('/css/page-room.css'),['satukiso-style'],null);
    wp_enqueue_script('page-room',get_theme_file_uri('/js/page-room.js'),['satukiso-main'],null,true);
  }

  // 404
  if (is_404()) {
    wp_enqueue_style('page-error',get_theme_file_uri('/css/page-error.css'),['satukiso-style'],null);
  }
});
