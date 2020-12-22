<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Опции' )
->add_fields( [
    Field::make( 'text', 'phone', 'Телефон' ),
    Field::make( 'text', 'email', 'email' ),
    Field::make( 'text', 'address', 'Адрес' ),
    Field::make( 'text', 'vk', 'VK' ),
    Field::make( 'text', 'fb', 'Facebook' ),
    Field::make( 'text', 'ig', 'Instagram' ),
    Field::make( 'text', 'yt', 'Youtube' )
]);
