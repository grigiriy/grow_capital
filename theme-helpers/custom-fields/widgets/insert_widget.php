<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Insert Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Вставка виджета</h2>'),
    Field::make('select', 'widget_id', 'Виджет:')
      ->add_options(get_widgets_arr()),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

    echo carbon_get_post_meta($fields['widget_id'], 'content');

  });
?>