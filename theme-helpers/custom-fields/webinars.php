<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Settings' )
->where( 'post_type', '=', 'webinars' )
->add_fields([
    Field::make('image', 'bg', 'Фон карточки'),
    Field::make('text', 'headline', 'Заг на карточке'),
    Field::make('text', 'link', 'Ссылка на вебинар'),
    Field::make('text', 'type', 'Тип'),
    Field::make('text', 'date', 'Дата'),
    Field::make('text', 'period', 'Длительность'),
    Field::make('text', 'subtitle', 'Подзаголовок'),
    Field::make('rich text', 'lead', 'Описание на карточке'),
]);

?>