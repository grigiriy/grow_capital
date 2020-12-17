<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Опции' )
->show_on_post_type( 'page' )
->add_tab( 'Основная информация', [
    Field::make( 'complex', 'main_information', '' )
        ->add_fields( [
            Field::make( 'text', 'phone', 'Телефон' )
                ->set_width( 50 ),
            Field::make( 'text', 'email', 'email' )
                ->set_width( 50 ),
            Field::make( 'text', 'vk', 'VK' )
                ->set_width( 50 ),
            Field::make( 'text', 'fb', 'Facebook' )
                ->set_width( 50 ),
            Field::make( 'text', 'ig', 'Instagram' )
                ->set_width( 50 ),
            Field::make( 'text', 'yt', 'Youtube' )
                ->set_width( 50 ),
            Field::make( 'text', 'yt', 'Youtube' )
                ->set_width( 50 ),
            Field::make( 'text', 'yt', 'Youtube' )
                ->set_width( 50 ),
        ])
]);
