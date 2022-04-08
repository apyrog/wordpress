<?php

function my_theme_enqueue_styles() {
        $parent_style = 'twentyseventeen-style';

        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
        wp_enqueue_style(
            'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            [$parent_style],
            wp_get_theme()->get('Version')
        );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


//create custom content type
function book_post_type() {
    $args = [
        'labels' => [
            'name' => 'Books',
            'singular_name' => 'Book'
        ],
        'hierarchical' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
    ];
    register_post_type('book', $args);
}
add_action('init', 'book_post_type');

//function product_taxonomy() {
//    $args = [
//        'labels' => [
//            'name' => 'Brands',
//            'singular_name' => 'Brand'
//        ],
//        'hierarchical' => true,
//        'public' => true,
//    ];
//    register_taxonomy('brands', ['product'], $args);
//}
//add_action('init', 'product_taxonomy');

function true_enqueue_js_and_css() {

    // CSS
    wp_enqueue_style(
        'custom_css', // идентификатор стиля
        get_stylesheet_directory_uri() . '/css/custom.css',  // URL стиля
        array(), // без зависимостей
        '5.0' // версия, это например ".../custom.css?ver=5.0"
    );

    // JavaScript
    wp_enqueue_script(
        'custom_js', // идентификатор скрипта
        get_stylesheet_directory_uri() . '/js/custom.js', // URL скрипта
        array( 'jquery' ), // зависимости от других скриптов
        time(), // версия каждую секунду разная, чтоб не кэшировать во время разработки
        true // true - в футере, false - в хедере
    );

}
add_action( 'wp_enqueue_scripts', 'true_enqueue_js_and_css' );

add_shortcode( 'foobar', 'foobar_shortcode' );
function foobar_shortcode( $atts, $content ){
    $atts = shortcode_atts( [
        'name' => 'Noname',
        'age'  => 18,
    ], $atts );
    return "Меня зовут {$atts['name']} мне {$atts['age']} лет";
}

add_shortcode( 'name', 'my_shortcode' );
function my_shortcode( $atts, $content ) {

    $a = shortcode_atts( [
        'class' => 'caption',
    ], $atts );

    return '<span class="' . esc_attr( $a['class'] ) . '">' . $content . '</span>';
}

