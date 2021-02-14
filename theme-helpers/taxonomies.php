<?php
function add_new_taxonomies()
{

    $labels = array(
      'name' => 'Категории',
      'singular_name' => 'Категория',
      'add_new' => 'Добавить категорию',
      'add_new_item' => 'Добавить новую категорию',
      'edit_item' => 'Редактировать категорию',
      'new_item' => 'Новая категория',
      'all_items' => 'Все категории',
      'view_item' => 'Просмотр всех категорий на сайте',
      'search_items' => 'Искать категории',
      'not_found' => 'Категорий не найдено.',
      'menu_name' => 'Категории'
    );

    register_taxonomy (
        'category_blog_tax', 'blog', array(
          'label' => 'Категории',
          'hierarchical' => true,
          'labels' => $labels,
          'rewrite' => array('slug' => 'blog'),
        )
    );
}

?>