<?php
// 启用特色图片
if ( function_exists( 'add_image_size' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 230, 160, true );
}

// wp_head()瘦身
// function my_function_admin_bar(){ return false; } add_filter( 'show_admin_bar' ,  'my_function_admin_bar');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_spannk');
remove_action('wp_head','rsd_spannk');
remove_action( 'wp_head', 'index_rel_spannk' );
remove_action( 'wp_head', 'parent_post_rel_spannk', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_spannk', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_spannk_wp_head', 10, 0 );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'feed_spannks', 2 );
remove_action( 'wp_head', 'feed_spannks_extra', 3 );

