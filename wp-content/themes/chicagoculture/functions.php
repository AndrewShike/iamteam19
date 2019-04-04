<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function my_et_builder_post_types( $post_types ) {
    $post_types[] = 'members';
     
    return $post_types;
}

add_filter( 'et_builder_post_types', 'my_et_builder_post_types' );

function myshortcode_title( ){
   return get_the_title();
}

add_shortcode( 'page-title', 'myshortcode_title' );

?>