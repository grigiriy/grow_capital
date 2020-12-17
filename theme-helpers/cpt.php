<?php
function true_register_post_type_init()
{
    $labels = [
        'name' => 'Вебинары',
        'singular_name' => 'Вебинар',
        'add_new' => 'Добавить вебинар',
        'add_new_item' => 'Добавить новый вебинар',
        'edit_item' => 'Редактировать вебинар',
        'new_item' => 'Новый вебинар',
        'all_items' => 'Все вебинары',
        'view_item' => 'Просмотр вебинаров на сайте',
        'search_items' => 'Искать вебинар',
        'not_found' => 'Вебинаров не найдено.',
        'not_found_in_trash' => 'В корзине нет вебинаров.',
        'menu_name' => 'Вебинары'
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array(
            'title',
            'editor',
            'page-attributes',
            'thumbnail',
            'revisions',
        )
      ];
    register_post_type ( 'webinars', $args );

} //function close    
?>