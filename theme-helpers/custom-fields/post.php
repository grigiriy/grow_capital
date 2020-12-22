<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Оглавление' )
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

?>