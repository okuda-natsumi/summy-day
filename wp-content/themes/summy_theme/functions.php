<?php
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

//js
function main_scripts(){
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() .'/js/main.js',
        true
    );
    wp_enqueue_script(
        'scroll_script',
        get_template_directory_uri() .'/js/smooth-scroll.min.js',
        true
    );
    wp_enqueue_script(
        'image_script',
        get_template_directory_uri() .'/js/imagesloaded.pkgd.min.js',
        true
    );
}
add_action( 'wp_enqueue_scripts' , 'main_scripts' );


/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/* アーカイブページ表示件数 */
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    /* アーカイブページの時に表示件数を10件にセット */
    if ( $query->is_archive() ) {
        $query->set( 'posts_per_page', '10' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
