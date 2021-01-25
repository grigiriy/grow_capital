<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Оглавление' )
  ->where( 'post_type', 'IN', ['page','post'] )
  ->add_fields([
    Field::make( 'complex', 'links', 'Ссылки' )
  ->add_fields( [
      Field::make( 'text', 'nav_link', 'Ссылка (#якорь)')
      ->set_width( 40 ),
      Field::make( 'text', 'nav_link_text', 'Текст ссылки')
      ->set_width( 40 ),
      Field::make( 'checkbox', 'nav_link_target', 'В новом окне')
      ->set_width( 20 ),
    ])
]);

Container::make( 'post_meta', 'Доп. сеошка.' )
  ->where( 'post_type', 'IN', ['page','post'] )
  ->set_context( 'side' )
  ->add_fields([
    Field::make( 'text', 'keywords', 'Ключевые слова')
  ]);
