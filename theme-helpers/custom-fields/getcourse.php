<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Widgets' )
->where( 'post_type', '=', 'getcourse_widgets' )
->add_fields([
    Field::make('textarea', 'content', 'Виджет')
]);

?>