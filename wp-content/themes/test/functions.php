<?php

define('Q_THEME_ROOT', get_template_directory_uri());
define('Q_CSS_DIR', Q_THEME_ROOT . '/css');
define('Q_JS_DIR', Q_THEME_ROOT . '/js');
define('Q_IMG_DIR', Q_THEME_ROOT . '/img');

add_action('wp_enqueue_scripts', 'theme_test_scripts');

function theme_test_scripts()
{
    wp_enqueue_style('style', Q_CSS_DIR. './style.css');
    wp_enqueue_style('main', Q_CSS_DIR. './main.css');
    wp_enqueue_style('markbook', Q_CSS_DIR. './markbook.css');
    wp_enqueue_style('category', Q_CSS_DIR. './category.css');
    wp_enqueue_style('theme', get_stylesheet_uri());
    //
    wp_deregister_script('jquery');
    wp_enqueue_script('data', Q_JS_DIR  . '/jquery.js');
    wp_enqueue_script('data', Q_JS_DIR  . '/data.js');
    wp_enqueue_script('script', Q_JS_DIR  . '/script.js');

}

add_action('init', 'my_custom_init');
function my_custom_init(){
    register_post_type('book', array(
        'labels'             => array(
            'name'               => 'Книги', // Основное название типа записи
            'singular_name'      => 'Книга', // отдельное название записи типа Book
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новую книгу',
            'edit_item'          => 'Редактировать книгу',
            'new_item'           => 'Новая книга',
            'view_item'          => 'Посмотреть книгу',
            'search_items'       => 'Найти книгу',
            'not_found'          => 'Книг не найдено',
            'not_found_in_trash' => 'В корзине книг не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Книги'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'book',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
}

function getBook() {
    $args = [
        'numberposts' => 5,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'book',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ];
    return get_posts($args);
}
//
