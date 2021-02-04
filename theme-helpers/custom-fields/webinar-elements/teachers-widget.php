<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Webinar Teachers Widget'))
  ->add_fields([
    Field::make('html', 'crb_information_webinar')
      ->set_html('<h2 style="color:blue; padding: 20px;">Учителя</h2>')
    ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {


get_template_part('theme-helpers/template-parts/teachers'); ?>
<!-- /.mb-20 -->

<?php
  });
?>