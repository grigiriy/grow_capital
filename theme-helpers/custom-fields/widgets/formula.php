<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Formula'))
  ->add_fields([
    Field::make('image', 'formula_image', __('Formula')),
    Field::make('text', 'alt', __('image alt')),
  ])
  ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

  <div class="txt-c">
    <img src="<?= wp_get_attachment_image_url($fields['formula_image'], 'full'); ?>" alt="<?= esc_html($fields['alt']); ?>" class="formula">
  </div><!-- /.txt-c -->


<?php
  });
?>