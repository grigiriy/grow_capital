<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Опции')
    ->add_fields([
        Field::make('text', 'phone', 'Телефон'),
        Field::make('text', 'email', 'email'),
        Field::make('text', 'address', 'Адрес'),
        Field::make('text', 'vk', 'VK'),
        Field::make('text', 'fb', 'Facebook'),
        Field::make('text', 'ig', 'Instagram'),
        Field::make('text', 'yt', 'Youtube'),
        Field::make('text', 'tg', 'Telegram'),
        Field::make('text', 'wa', 'WhatsApp'),
        Field::make('text', 'login', 'Login URL'),
        Field::make('text', 'services', 'Services URL')
    ]);


Container::make('term_meta', 'Категория')
    ->where('term_taxonomy', '=', 'category')
    ->add_fields([
        Field::make('text', 'meta_title', 'Заг'),
    ]);
