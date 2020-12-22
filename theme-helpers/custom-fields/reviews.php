<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Review' )
->where( 'post_type', '=', 'reviews' )
->add_fields([
    Field::make('image', 'avatar', 'Аватар'),
    Field::make('rich_text', 'content', 'Текст отзыва')
]);

?>